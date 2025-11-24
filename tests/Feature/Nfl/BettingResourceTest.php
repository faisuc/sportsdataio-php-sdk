<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\BettingResource;

it('can get pre-game odds by week', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->preGameOddsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get pre-game and period odds by week', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->preGameAndPeriodOddsByWeek('2023REG', 1, 'G1100');

    expect($result)->toBeArray();
});

it('can get period game odds by week', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->periodGameOddsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get pre-game odds line movement', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->preGameOddsLineMovement(12345);

    expect($result)->toBeArray();
});

it('can get in-game odds by week', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->inGameOddsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get in-game odds by week with group', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->inGameOddsByWeekWithGroup('2023REG', 1, 'G1100');

    expect($result)->toBeArray();
});

it('can get in-game odds line movement', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->inGameOddsLineMovement(12345);

    expect($result)->toBeArray();
});

it('can get betting events by date', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingEventsByDate('2023-09-10');

    expect($result)->toBeArray();
});

it('can get betting events by season', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingEvents('2023');

    expect($result)->toBeArray();
});

it('can get betting markets by event', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingMarketsByEvent('12345');

    expect($result)->toBeArray();
});

it('can get betting markets by event with group', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingMarketsByEventWithGroup('12345', 'G1100');

    expect($result)->toBeArray();
});

it('can get betting markets by game', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingMarketsByGame(12345);

    expect($result)->toBeArray();
});

it('can get betting markets by game with group', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingMarketsByGameWithGroup(12345, 'G1100');

    expect($result)->toBeArray();
});

it('can get betting markets by market type', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingMarketsByMarketType('12345', '2');

    expect($result)->toBeArray();
});

it('can get betting player props by game', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingPlayerPropsByGame(12345);

    expect($result)->toBeArray();
});

it('can get betting futures by season', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingFuturesBySeason('2023REG');

    expect($result)->toBeArray();
});

it('can get betting trends by matchup', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingTrendsByMatchup('PHI', 'NE');

    expect($result)->toBeArray();
});

it('can get betting trends by team', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingTrendsByTeam('PHI');

    expect($result)->toBeArray();
});

it('can get betting splits by market', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingSplitsByMarket('12345');

    expect($result)->toBeArray();
});

it('can get betting splits by game', function () {
    $client = new Client($this->apiKey);
    $resource = new BettingResource($client, 'nfl');

    $result = $resource->bettingSplitsByGame(12345);

    expect($result)->toBeArray();
});

