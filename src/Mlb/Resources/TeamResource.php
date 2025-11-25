<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class TeamResource extends Resource
{
    /**
     * Returns all teams with information such as team name, city, league, division, colors, logos, head coach (manager), hitting coach, and pitching coach.
     *
     * @return array
     */
    public function all(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/AllTeams');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all active teams with information such as team name, city, league, division, colors, logos, head coach (manager), hitting coach, and pitching coach.
     *
     * @return array
     */
    public function allActive(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/teams');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all active teams with information such as team name, city, league, division, colors, logos, head coach (manager), hitting coach, and pitching coach, for the specified season.
     *
     * @param  string  $season  Year of the season and the season type. If no season type is provided, then the default is regular season. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function bySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/teams/{$season}");

        return $this->client->get($endpoint);
    }
}

