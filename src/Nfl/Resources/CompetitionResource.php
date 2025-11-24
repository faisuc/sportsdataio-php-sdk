<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class CompetitionResource extends Resource
{
    /**
     * Returns regular season standings for all teams in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     */
    public function standings(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Standings/{$season}");

        return $this->client->get($endpoint);
    }
}
