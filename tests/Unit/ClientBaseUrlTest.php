<?php

use Faisuc\SportsdataioPhpSdk\Client;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

it('updates the HTTP client base URI when setBaseUrl is called', function () {
    $mock = new MockHandler([
        new Response(200, [], json_encode(['test' => 'data'])),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient([
        'handler' => $handlerStack,
        'base_uri' => 'https://api.sportsdata.io/v3',
    ]);

    $client = new Client($this->apiKey, $guzzleClient);

    $newBaseUrl = 'https://custom-api.example.com';
    $client->setBaseUrl($newBaseUrl);

    $reflection = new ReflectionClass($client);
    $httpClientProperty = $reflection->getProperty('httpClient');
    $httpClientProperty->setAccessible(true);
    $updatedClient = $httpClientProperty->getValue($client);

    expect($updatedClient)->toBeInstanceOf(GuzzleClient::class);

    $clientConfig = $updatedClient->getConfig();
    $baseUri = $clientConfig['base_uri'];
    $baseUriString = is_string($baseUri) ? $baseUri : (string) $baseUri;
    expect($baseUriString)->toBe($newBaseUrl.'/');
});
