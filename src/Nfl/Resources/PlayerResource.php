<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class PlayerResource extends Resource
{
    /**
     * Returns all players with their biographical information.
     */
    public function all(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/PlayersByAvailable');

        return $this->client->get($endpoint);
    }

    /**
     * Returns players who are not on a team.
     */
    public function freeAgents(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/PlayersByFreeAgents');

        return $this->client->get($endpoint);
    }

    /**
     * Returns rookies from the specified draft year.
     *
     * @param  int  $season  Year of the season. Examples: 2018, 2019
     */
    public function rookies(int $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/PlayersByRookieDraftYear/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players on the specified team.
     *
     * @param  string  $team  Abbreviation of the team. Example: WAS
     */
    public function byTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("scores/json/PlayersBasic/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns full player bio and details for all NFL players.
     */
    public function details(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Players');

        return $this->client->get($endpoint);
    }

    /**
     * Returns full player bio and details for free agents.
     */
    public function detailsFreeAgents(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/FreeAgents');

        return $this->client->get($endpoint);
    }

    /**
     * Returns full player bio and details for injured players.
     */
    public function detailsInjured(): array
    {
        $endpoint = $this->buildEndpoint('projections/json/InjuredPlayers');

        return $this->client->get($endpoint);
    }

    /**
     * Returns full player bio and details for players by team.
     *
     * @param  string  $team  Abbreviation of the team. Example: WAS
     */
    public function detailsByTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Players/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns full player bio and details for rookies by draft year.
     *
     * @param  int  $season  Year of the season. Examples: 2018, 2019
     */
    public function detailsRookies(int $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Rookies/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all injured players along with injury information.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     */
    public function injuries(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/Injuries/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns injured players on the specified team.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     */
    public function injuriesByTeam(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/Injuries/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns depth chart information for all active players.
     */
    public function depthCharts(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/DepthCharts');

        return $this->client->get($endpoint);
    }

    /**
     * Returns depth chart information for all players (including IR, PUP, etc.).
     */
    public function depthChartsAll(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/DepthChartsAll');

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of transactions for the specified date.
     *
     * @param  string  $date  The date of the transactions. Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function transactionsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TransactionsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players selected for the Pro Bowl, filtered by season.
     *
     * @param  string  $season  Year of the season. Examples: 2016, 2017
     */
    public function proBowlers(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/ProBowlers/{$season}");

        return $this->client->get($endpoint);
    }
}
