<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\StatsResource;

it('can get box score (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScoreFinal(12345);

    expect($result)->toBeArray();
});

it('can get box score (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScore(12345);

    expect($result)->toBeArray();
});

it('can get box scores by week (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScoresFinal('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get box score by team (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScoreByTeamFinal('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get box score by team (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScoreByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get box scores delta', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->boxScoresDelta('2023REG', 1, 'all', 2);

    expect($result)->toBeArray();
});

it('can get player game stats by team (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsByTeamFinal('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get player game stats by team (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsByTeam('2023REG', 1, 'WAS');

    expect($result)->toBeArray();
});

it('can get player game stats by week (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsByWeekFinal('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player game stats by week (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsByWeek('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player game stats delta', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsDelta(2);

    expect($result)->toBeArray();
});

it('can get player game stats by week delta', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameStatsByWeekDelta('2023REG', 1, 2);

    expect($result)->toBeArray();
});

it('can get team game stats (final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->teamGameStatsFinal('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get team game stats (live and final)', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->teamGameStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player season stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonStats('2023REG');

    expect($result)->toBeArray();
});

it('can get player season stats by team', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonStatsByTeam('2023REG', 'WAS');

    expect($result)->toBeArray();
});

it('can get team season stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->teamSeasonStats('2023REG');

    expect($result)->toBeArray();
});

it('can get player game logs', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameLogs('2023REG', 12345, 'all');

    expect($result)->toBeArray();
});

it('can get team game logs', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->teamGameLogs('2023REG', 8, 'all');

    expect($result)->toBeArray();
});

it('can get player game red zone stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameRedZoneStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player game red zone inside five stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameRedZoneInsideFiveStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player game red zone inside ten stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerGameRedZoneInsideTenStats('2023REG', 1);

    expect($result)->toBeArray();
});

it('can get player season red zone stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonRedZoneStats('2023REG');

    expect($result)->toBeArray();
});

it('can get player season red zone inside five stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonRedZoneInsideFiveStats('2023REG');

    expect($result)->toBeArray();
});

it('can get player season red zone inside ten stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonRedZoneInsideTenStats('2023REG');

    expect($result)->toBeArray();
});

it('can get player season third down stats', function () {
    $client = new Client($this->apiKey);
    $resource = new StatsResource($client, 'nfl');

    $result = $resource->playerSeasonThirdDownStats('2023REG');

    expect($result)->toBeArray();
});

