<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class TeamResource extends Resource
{
    /**
     * Returns full team information for teams currently active in the league.
     *
     * @return array
     */
    public function allActive(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Teams');

        return $this->client->get($endpoint);
    }

    /**
     * Returns full team information for all teams regardless of current active status.
     *
     * @return array
     */
    public function all(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/AllTeams');

        return $this->client->get($endpoint);
    }

    /**
     * Returns full team information for active teams in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function bySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Teams/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns basic team information for all teams regardless of current active status.
     *
     * @return array
     */
    public function basic(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/TeamsBasic');

        return $this->client->get($endpoint);
    }
}

