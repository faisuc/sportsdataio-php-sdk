<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\TeamResource;

it('can get all active teams', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'mlb');

    $result = $resource->allActive();

    expect($result)->toBeArray();
});

it('can get all teams', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'mlb');

    $result = $resource->all();

    expect($result)->toBeArray();
});

it('can get teams by season', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'mlb');

    $result = $resource->bySeason('2023REG');

    expect($result)->toBeArray();
});

