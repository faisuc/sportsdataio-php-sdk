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

