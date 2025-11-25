<?php

use Faisuc\SportsdataioPhpSdk\SportsdataioPhpSdk;

it('can instantiate the SDK', function () {
    $sdk = new SportsdataioPhpSdk($this->apiKey);

    expect($sdk)->toBeInstanceOf(SportsdataioPhpSdk::class);
});

it('can access the NFL client', function () {
    $sdk = new SportsdataioPhpSdk($this->apiKey);

    expect($sdk->nfl())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\NflClient::class);
});

it('can access the MLB client', function () {
    $sdk = new SportsdataioPhpSdk($this->apiKey);

    expect($sdk->mlb())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\MlbClient::class);
});

it('can access all NFL resource categories', function () {
    $sdk = new SportsdataioPhpSdk($this->apiKey);
    $nfl = $sdk->nfl();

    expect($nfl->competition())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\CompetitionResource::class)
        ->and($nfl->teams())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\TeamResource::class)
        ->and($nfl->players())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\PlayerResource::class)
        ->and($nfl->venues())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\VenueResource::class)
        ->and($nfl->events())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\EventResource::class)
        ->and($nfl->stats())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\StatsResource::class)
        ->and($nfl->betting())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\BettingResource::class)
        ->and($nfl->fantasy())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\FantasyResource::class)
        ->and($nfl->news())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\NewsResource::class)
        ->and($nfl->utility())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Nfl\Resources\UtilityResource::class);
});

it('can access all MLB resource categories', function () {
    $sdk = new SportsdataioPhpSdk($this->apiKey);
    $mlb = $sdk->mlb();

    expect($mlb->competition())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\CompetitionResource::class)
        ->and($mlb->teams())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\TeamResource::class)
        ->and($mlb->players())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\PlayerResource::class)
        ->and($mlb->venues())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\VenueResource::class)
        ->and($mlb->events())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\EventResource::class)
        ->and($mlb->stats())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\StatsResource::class)
        ->and($mlb->betting())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\BettingResource::class)
        ->and($mlb->fantasy())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\FantasyResource::class)
        ->and($mlb->news())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\NewsResource::class)
        ->and($mlb->utility())->toBeInstanceOf(\Faisuc\SportsdataioPhpSdk\Mlb\Resources\UtilityResource::class);
});
