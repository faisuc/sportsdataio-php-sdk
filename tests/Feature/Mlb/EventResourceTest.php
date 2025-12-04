<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\EventResource;

it('can get schedules', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->schedules('2023');

    expect($result)->toBeArray();
});

it('can get basic schedules', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->schedulesBasic('2023');

    expect($result)->toBeArray();
});

it('can get scores by date (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->scoresByDateFinal('2023-07-15');

    expect($result)->toBeArray();
});

it('can get scores by date (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->scoresByDate('2023-07-15');

    expect($result)->toBeArray();
});

it('can get play by play (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->playByPlayFinal(12345);

    expect($result)->toBeArray();
});

it('can get play by play (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'mlb');

    $result = $resource->playByPlay(12345);

    expect($result)->toBeArray();
});
