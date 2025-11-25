<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class PlayerResource extends Resource
{
    /**
     * Returns all players currently on a team, including biographical information, team, jersey number, position, bat hand, and throw hand.
     *
     * @return array
     */
    public function allActive(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/PlayersByActive');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players that are currently not on a team, including biographical information, position, bat hand, and throw hand.
     *
     * @return array
     */
    public function freeAgents(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/PlayersByFreeAgents');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players with biographical information on the specified team.
     *
     * @param  string  $team  The abbreviation of the requested team. Examples: SF, NYY
     * @return array
     */
    public function byTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("scores/json/PlayersBasic/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players currently on a team, including biographical information, team, jersey number, position, and injuries.
     *
     * @return array
     */
    public function detailsActive(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Players');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players currently not on a team, including biographical information, team, jersey number, position, and injuries.
     *
     * @return array
     */
    public function detailsFreeAgents(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/FreeAgents');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players that have an injury or are on an injured list, suspended list, restricted list, paternity list, bereavement list, or military list.
     *
     * @return array
     */
    public function detailsInjured(): array
    {
        $endpoint = $this->buildEndpoint('projections/json/InjuredPlayers');

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players on the specified team, with full bio information, injury information, and player ID's.
     *
     * @param  string  $team  The abbreviation of the requested team. Examples: SF, NYY
     * @return array
     */
    public function detailsByTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Players/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns depth charts for all teams. Includes only players on the active roster.
     *
     * @return array
     */
    public function depthCharts(): array
    {
        $endpoint = $this->buildEndpoint('projections/json/DepthCharts');

        return $this->client->get($endpoint);
    }

    /**
     * Returns projected and confirmed starting lineups for games on the specified date.
     *
     * @param  string  $date  The date of the slates. Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function startingLineupsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("projections/json/StartingLineupsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of transactions on given date.
     *
     * @param  string  $date  The date of the news. Format: yyyy-MM-dd. Examples: 2015-07-31, 2015-09-01
     * @return array
     */
    public function transactionsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TransactionsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns stats for the specified hitter vs. the specified pitcher.
     *
     * @param  int  $hitterId  Unique FantasyData Player ID. Example: 10000031
     * @param  int  $pitcherId  Unique FantasyData Player ID. Example: 10000618
     * @return array
     */
    public function batterVsPitcherStats(int $hitterId, int $pitcherId): array
    {
        $endpoint = $this->buildEndpoint("stats/json/HitterVsPitcher/{$hitterId}/{$pitcherId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a team's hitting stats versus the projected or confirmed starting pitcher for the specified game.
     *
     * @param  int  $gameId  The GameID of an MLB game
     * @param  string  $team  The abbreviation of the requested team. Examples: SF, NYY
     * @return array
     */
    public function teamHittingVsStartingPitcher(int $gameId, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/TeamHittersVsPitcher/{$gameId}/{$team}");

        return $this->client->get($endpoint);
    }
}

