<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\CompetitionResource;

it('can get standings for a season', function () {
    $client = new Client($this->apiKey);
    $resource = new CompetitionResource($client, 'nfl');

    $result = $resource->standings('2023REG');

    expect($result)->toBeArray();
});
