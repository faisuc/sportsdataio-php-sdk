<?php

use Faisuc\SportsdataioPhpSdk\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

it('can instantiate the client', function () {
    $client = new Client($this->apiKey);

    expect($client)->toBeInstanceOf(Client::class);
});

it('can set a custom HTTP client', function () {
    $guzzleClient = new GuzzleClient();
    $client = new Client($this->apiKey, $guzzleClient);

    expect($client)->toBeInstanceOf(Client::class);
});

it('can get the API key', function () {
    $client = new Client($this->apiKey);

    expect($client->getApiKey())->toBe($this->apiKey);
});

it('can set a custom base URL', function () {
    $client = new Client($this->apiKey);
    $client->setBaseUrl('https://custom-api.example.com');

    expect($client)->toBeInstanceOf(Client::class);
});

it('can make a GET request', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['data' => 'test'])),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe(['data' => 'test']);
});

it('handles empty JSON response', function () {
    $mock = new MockHandler([
        new Response(200, [], ''),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe([]);
});

it('handles scalar boolean responses', function () {
    $mock = new MockHandler([
        new Response(200, [], 'true'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe(true)->toBeBool();
});

it('handles scalar integer responses', function () {
    $mock = new MockHandler([
        new Response(200, [], '2023'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe(2023)->toBeInt();
});

it('preserves legitimate null values from API', function () {
    $mock = new MockHandler([
        new Response(200, [], 'null'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBeNull();
});

it('returns empty array for JSON decode errors', function () {
    $mock = new MockHandler([
        new Response(200, [], 'invalid json {'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe([]);
});

it('preserves null in arrays', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['value' => null, 'other' => 'test'])),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe(['value' => null, 'other' => 'test'])
        ->and($result['value'])->toBeNull();
});

it('handles whitespace-only responses', function () {
    $mock = new MockHandler([
        new Response(200, [], '   '),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);

    $result = $client->get('/test');

    expect($result)->toBe([]);
});

