<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\VenueResource;

it('can get stadiums', function () {
    $client = new Client($this->apiKey);
    $resource = new VenueResource($client, 'nfl');

    $result = $resource->stadiums();

    expect($result)->toBeArray();
});

it('can get referees', function () {
    $client = new Client($this->apiKey);
    $resource = new VenueResource($client, 'nfl');

    $result = $resource->referees();

    expect($result)->toBeArray();
});

