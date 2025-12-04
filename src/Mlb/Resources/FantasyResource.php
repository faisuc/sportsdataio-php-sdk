<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class FantasyResource extends Resource
{
    /**
     * Returns SportsDataIO's proprietary projections, including DFS salary information and injuries, for fantasy players, called by date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function projectedPlayerGameStatsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerGameProjectionStatsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections, including average draft position, for all active players for the season.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     */
    public function projectedPlayerSeasonStatsWithAdp(string $season): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerSeasonProjectionStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS Slates which have not yet started for which we have DFS projections.
     *
     * @param  string  $date  The date of the slates. Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function dfsSlatesByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("projections/json/DfsSlatesByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a simple list of fantasy points and stats for each player for a given date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function fantasyPointsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyGameStatsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS Slate Ownership Projections for a specific slate.
     *
     * @param  int  $slateId  SlateID of the DFS Slate you wish to get ownership projections for
     */
    public function dfsSlateOwnershipProjectionsBySlate(int $slateId): array
    {
        $endpoint = $this->buildEndpoint("projections/json/DfsSlateOwnershipProjectionsBySlateID/{$slateId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS Slates which have not yet started for which we have DFS Ownership projections.
     */
    public function upcomingDfsSlateOwnershipProjections(): array
    {
        $endpoint = $this->buildEndpoint('projections/json/UpcomingDfsSlateOwnershipProjections');

        return $this->client->get($endpoint);
    }
}
