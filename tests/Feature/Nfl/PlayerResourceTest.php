<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\PlayerResource;

it('can get all players', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->all();

    expect($result)->toBeArray();
});

it('can get free agents', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->freeAgents();

    expect($result)->toBeArray();
});

it('can get rookies by draft year', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->rookies(2023);

    expect($result)->toBeArray();
});

it('can get players by team', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->byTeam('WAS');

    expect($result)->toBeArray();
});

it('can get player details', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->details();

    expect($result)->toBeArray();
});

it('can get player details for free agents', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->detailsFreeAgents();

    expect($result)->toBeArray();
});

it('can get injured players', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->injuries('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get injuries by team', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->injuriesByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get depth charts', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->depthCharts();

    expect($result)->toBeArray();
});

it('can get all depth charts', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->depthChartsAll();

    expect($result)->toBeArray();
});

it('can get transactions by date', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->transactionsByDate('2023-09-01');

    expect($result)->toBeArray();
});

it('can get pro bowlers', function () {
    $client = new Client($this->apiKey);
    $resource = new PlayerResource($client, 'nfl');

    $result = $resource->proBowlers('2023');

    expect($result)->toBeArray();
});
