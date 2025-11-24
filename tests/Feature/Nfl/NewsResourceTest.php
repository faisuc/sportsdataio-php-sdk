<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\NewsResource;

it('can get news', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->news();

    expect($result)->toBeArray();
});

it('can get news by date', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->newsByDate('2023-09-01');

    expect($result)->toBeArray();
});

it('can get news by player', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->newsByPlayer(12345);

    expect($result)->toBeArray();
});

it('can get news by team', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->newsByTeam('WAS');

    expect($result)->toBeArray();
});

it('can get premium news', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->premiumNews();

    expect($result)->toBeArray();
});

it('can get premium news by date', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->premiumNewsByDate('2023-09-01');

    expect($result)->toBeArray();
});

it('can get premium news by team', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->premiumNewsByTeam('WAS');

    expect($result)->toBeArray();
});

it('can get headshots', function () {
    $client = new Client($this->apiKey);
    $resource = new NewsResource($client, 'nfl');

    $result = $resource->headshots();

    expect($result)->toBeArray();
});

