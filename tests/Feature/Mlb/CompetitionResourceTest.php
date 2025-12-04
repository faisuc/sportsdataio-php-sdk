<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\CompetitionResource;

it('can get standings for a season', function () {
    $client = new Client($this->apiKey);
    $resource = new CompetitionResource($client, 'mlb');

    $result = $resource->standings('2023');

    expect($result)->toBeArray();
});
