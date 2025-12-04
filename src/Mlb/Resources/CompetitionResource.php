<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class CompetitionResource extends Resource
{
    /**
     * Returns regular season standings for all divisions and leagues, which is used to derive postseason seeding.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     */
    public function standings(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Standings/{$season}");

        return $this->client->get($endpoint);
    }
}
