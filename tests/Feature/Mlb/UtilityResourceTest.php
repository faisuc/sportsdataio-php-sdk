<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\UtilityResource;

it('can check if games are in progress', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'mlb');

    $result = $resource->areGamesInProgress();

    expect($result)->toBeBool();
});

it('can get betting metadata', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'mlb');

    $result = $resource->bettingMetadata();

    expect($result)->toBeArray();
});

it('can get current season', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'mlb');

    $result = $resource->currentSeason();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get active sportsbooks', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'mlb');

    $result = $resource->activeSportsbooks();

    expect($result)->toBeArray();
});
