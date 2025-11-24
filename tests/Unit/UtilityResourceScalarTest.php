<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\UtilityResource;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

it('correctly handles boolean response for areGamesInProgress', function () {
    $mock = new MockHandler([
        new Response(200, [], 'true'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->areGamesInProgress();

    expect($result)->toBeTrue();
});

it('correctly handles false response for areGamesInProgress', function () {
    $mock = new MockHandler([
        new Response(200, [], 'false'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->areGamesInProgress();

    expect($result)->toBeFalse();
});

it('correctly handles integer response for currentSeason', function () {
    $mock = new MockHandler([
        new Response(200, [], '2023'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentSeason();

    expect($result)->toBe(2023)->toBeInt();
});

it('correctly handles null response for currentSeason', function () {
    $mock = new MockHandler([
        new Response(200, [], 'null'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentSeason();

    expect($result)->toBeNull();
});

it('correctly handles null response for currentWeek', function () {
    $mock = new MockHandler([
        new Response(200, [], 'null'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentWeek();

    expect($result)->toBeNull();
});

it('correctly handles integer response for currentWeek', function () {
    $mock = new MockHandler([
        new Response(200, [], '5'),
    ]);

    $handlerStack = HandlerStack::create($mock);
    $guzzleClient = new GuzzleClient(['handler' => $handlerStack]);
    $client = new Client($this->apiKey, $guzzleClient);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentWeek();

    expect($result)->toBe(5)->toBeInt();
});

