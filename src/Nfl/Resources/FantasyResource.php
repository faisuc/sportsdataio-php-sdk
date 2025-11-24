<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class FantasyResource extends Resource
{
    /**
     * Returns SportsDataIO's proprietary projections, including DFS salary information, for all fantasy defense teams.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function projectedFantasyDefenseGameStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("projections/json/FantasyDefenseProjectionsByGame/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections, including average draft position, for all fantasy defense teams for the season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function projectedFantasyDefenseSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("projections/json/FantasyDefenseProjectionsBySeason/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections, including DFS salary information and injuries, for fantasy players, called by week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function projectedPlayerGameStatsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerGameProjectionStatsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections, including DFS salary information and injuries, for fantasy players, called by team.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function projectedPlayerGameStatsByTeam(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerGameProjectionStatsByTeam/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections on a season-long basis, including Average Draft Position (ADP), for fantasy players.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function projectedPlayerSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerSeasonProjectionStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns SportsDataIO's proprietary projections on a season-long basis, including ADP, for fantasy players, for a given season and team.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function projectedPlayerSeasonStatsByTeam(string $season, string $team): array
    {
        $endpoint = $this->buildEndpoint("projections/json/PlayerSeasonProjectionStatsByTeam/{$season}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns Individual Defensive Player (IDP) stats, including DFS salary information and injuries, for fantasy players, called by week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function idpProjectedPlayerGameStatsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("projections/json/IdpPlayerGameProjectionStatsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns Individual Defensive Player (IDP) stats, including DFS salary information and injuries, for fantasy players, called by team.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function idpProjectedPlayerGameStatsByTeam(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("projections/json/IdpPlayerGameProjectionStatsByTeam/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS slates, including eligible games, positions, captain mode, players and salaries, for a given date.
     *
     * @param  string  $date  The date of the slates. Format: yyyy-MM-dd. Examples: 2017-09-25, 2017-10-31
     * @return array
     */
    public function dfsSlatesByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("projections/json/DfsSlatesByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS slates, including eligible games, positions, captain mode, players and salaries, for a given week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function dfsSlatesByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("projections/json/DfsSlatesByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns stats and fantasy points for a given game for the fantasy defense team (not IDP).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function fantasyDefenseGameStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyDefenseByGame/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns stats and fantasy points for a given team's game for the fantasy defense team (not IDP).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function fantasyDefenseGameStatsByTeam(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyDefenseByGameByTeam/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns stats and fantasy points for a given season for the fantasy defense team (not IDP).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function fantasyDefenseSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyDefenseBySeason/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns stats and fantasy points for a given team and season for the fantasy defense team (not IDP).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function fantasyDefenseSeasonStatsByTeam(string $season, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyDefenseBySeasonByTeam/{$season}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a simple list of fantasy points and stats for each player for a given week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function fantasyPointsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/FantasyGameStatsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns projected fantasy ownership of all players for a given season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerOwnership(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerOwnership/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns Slate Ownership Projections for a specific slate.
     *
     * @param  string  $slateId  SlateID of the DFS Slate
     * @return array
     */
    public function dfsSlateOwnershipProjectionsBySlate(string $slateId): array
    {
        $endpoint = $this->buildEndpoint("projections/json/DfsSlateOwnershipProjectionsBySlateID/{$slateId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns DFS Slates which have not yet started for which we have DFS Ownership projections.
     *
     * @return array
     */
    public function upcomingDfsSlateOwnershipProjections(): array
    {
        $endpoint = $this->buildEndpoint('projections/json/UpcomingDfsSlateOwnershipProjections');

        return $this->client->get($endpoint);
    }
}

