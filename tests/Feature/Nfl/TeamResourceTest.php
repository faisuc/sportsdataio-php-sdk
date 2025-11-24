<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\TeamResource;

it('can get all active teams', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'nfl');

    $result = $resource->allActive();

    expect($result)->toBeArray();
});

it('can get all teams', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'nfl');

    $result = $resource->all();

    expect($result)->toBeArray();
});

it('can get teams by season', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'nfl');

    $result = $resource->bySeason('2023REG');

    expect($result)->toBeArray();
});

it('can get basic team information', function () {
    $client = new Client($this->apiKey);
    $resource = new TeamResource($client, 'nfl');

    $result = $resource->basic();

    expect($result)->toBeArray();
});

