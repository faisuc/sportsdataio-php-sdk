<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Nfl\Resources\CompetitionResource;

it('builds correct endpoint URLs without duplicate format', function () {
    $client = new Client($this->apiKey);
    $resource = new CompetitionResource($client, 'nfl');

    $reflection = new ReflectionClass($resource);
    $method = $reflection->getMethod('buildEndpoint');
    $method->setAccessible(true);

    $endpoint = $method->invoke($resource, 'scores/json/Standings/2023REG');

    expect($endpoint)->toBe('nfl/scores/json/Standings/2023REG')
        ->not->toContain('/json/json')
        ->not->toEndWith('/json')
        ->not->toStartWith('/');
});

