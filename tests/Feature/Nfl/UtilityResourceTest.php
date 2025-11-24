<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\UtilityResource;

it('can check if games are in progress', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->areGamesInProgress();

    expect($result)->toBeBool();
});

it('can get betting metadata', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->bettingMetadata();

    expect($result)->toBeArray();
});

it('can get bye weeks', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->byeWeeks('2023REG');

    expect($result)->toBeArray();
});

it('can get current season', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentSeason();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get last completed season', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->lastCompletedSeason();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get upcoming season', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->upcomingSeason();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get active sportsbooks', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->activeSportsbooks();

    expect($result)->toBeArray();
});

it('can get timeframes', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->timeframes('current');

    expect($result)->toBeArray();
});

it('can get current week', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->currentWeek();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get last completed week', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->lastCompletedWeek();

    expect($result)->toBeInt()->or->toBeNull();
});

it('can get upcoming week', function () {
    $client = new Client($this->apiKey);
    $resource = new UtilityResource($client, 'nfl');

    $result = $resource->upcomingWeek();

    expect($result)->toBeInt()->or->toBeNull();
});
