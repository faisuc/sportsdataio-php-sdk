<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\EventResource;

it('can get schedules', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->schedules('2023REG');

    expect($result)->toBeArray();
});

it('can get basic schedules', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->schedulesBasic('2023REG');

    expect($result)->toBeArray();
});

it('can get scores by date (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresByDateFinal('2023-09-10');

    expect($result)->toBeArray();
});

it('can get scores by date (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresByDate('2023-09-10');

    expect($result)->toBeArray();
});

it('can get scores by season (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresBySeasonFinal('2023REG');

    expect($result)->toBeArray();
});

it('can get scores by season (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresBySeason('2023REG');

    expect($result)->toBeArray();
});

it('can get scores by week (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresByWeekFinal('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get scores by week (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get basic scores by week (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresBasicFinal('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get basic scores by week (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->scoresBasic('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get play by play (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->playByPlayFinal(12345);

    expect($result)->toBeArray();
});

it('can get play by play (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->playByPlay(12345);

    expect($result)->toBeArray();
});

it('can get play by play by team (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->playByPlayByTeamFinal('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get play by play by team (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->playByPlayByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get play by play delta', function () {
    $client = new Client($this->apiKey);
    $resource = new EventResource($client, 'nfl');

    $result = $resource->playByPlayDelta('2023REG', 1, 2);

    expect($result)->toBeArray();
});
