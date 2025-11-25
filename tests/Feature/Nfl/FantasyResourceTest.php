<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\FantasyResource;

it('can get projected fantasy defense game stats', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedFantasyDefenseGameStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get projected fantasy defense season stats', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedFantasyDefenseSeasonStats('2023REG');

    expect($result)->toBeArray();
});

it('can get projected player game stats by week', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedPlayerGameStatsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get projected player game stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedPlayerGameStatsByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get projected player season stats', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedPlayerSeasonStats('2023REG');

    expect($result)->toBeArray();
});

it('can get projected player season stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->projectedPlayerSeasonStatsByTeam('2023REG', 'WAS');

    expect($result)->toBeArray();
});

it('can get IDP projected player game stats by week', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->idpProjectedPlayerGameStatsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get IDP projected player game stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->idpProjectedPlayerGameStatsByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get DFS slates by date', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->dfsSlatesByDate('2023-09-10');

    expect($result)->toBeArray();
});

it('can get DFS slates by week', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->dfsSlatesByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get fantasy defense game stats', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->fantasyDefenseGameStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get fantasy defense game stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->fantasyDefenseGameStatsByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get fantasy defense season stats', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->fantasyDefenseSeasonStats('2023REG');

    expect($result)->toBeArray();
});

it('can get fantasy defense season stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->fantasyDefenseSeasonStatsByTeam('2023REG', 'WAS');

    expect($result)->toBeArray();
});

it('can get fantasy points by week', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->fantasyPointsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player ownership', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->playerOwnership('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get DFS slate ownership projections by slate', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->dfsSlateOwnershipProjectionsBySlate(12345);

    expect($result)->toBeArray();
});

it('can get upcoming DFS slate ownership projections', function () {
    $client = new Client($this->apiKey);
    $resource = new FantasyResource($client, 'nfl');

    $result = $resource->upcomingDfsSlateOwnershipProjections();

    expect($result)->toBeArray();
});

