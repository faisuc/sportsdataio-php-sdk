<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class StatsResource extends Resource
{
    /**
     * Returns all statistics for the specified game (Final only).
     *
     * @param  int  $scoreId  The ScoreID of the game
     * @return array
     */
    public function boxScoreFinal(int $scoreId): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoreFinal/{$scoreId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all statistics for the specified game (Live & Final).
     *
     * @param  int  $scoreId  The ScoreID of the game
     * @return array
     */
    public function boxScore(int $scoreId): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoreByScoreIDV3/{$scoreId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all statistics for games in the specified season and week (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function boxScoresFinal(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoresFinal/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns full team and player statistics for a specified team's game (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $homeTeam  Abbreviation of a team playing in this game. Example: WAS
     * @return array
     */
    public function boxScoreByTeamFinal(string $season, int $week, string $homeTeam): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoreByTeamFinal/{$season}/{$week}/{$homeTeam}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns full team and player statistics for a specified team's game (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $homeTeam  Abbreviation of a team playing in this game. Example: WAS
     * @return array
     */
    public function boxScoreByTeam(string $season, int $week, string $homeTeam): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoreV3/{$season}/{$week}/{$homeTeam}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns box scores for all games in a specified season and week, including only player stats updated in the last X minutes.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $playersToInclude  The subcategory of players to include. Possible values: all, fantasy, idp
     * @param  int  $minutes  Only returns player statistics that have changed in the last X minutes
     * @return array
     */
    public function boxScoresDelta(string $season, int $week, string $playersToInclude, int $minutes): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoresDeltaV3/{$season}/{$week}/{$playersToInclude}/{$minutes}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record for all involved players in a given team's game (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function playerGameStatsByTeamFinal(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByTeamFinal/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record for all involved players in a given team's game (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function playerGameStatsByTeam(string $season, int $week, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByTeam/{$season}/{$week}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record for all involved players across all teams' games in a given week (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerGameStatsByWeekFinal(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByWeekFinal/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record for all involved players across a given week (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerGameStatsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns live player game stats, including only those updated in the last X minutes.
     *
     * @param  int  $minutes  Only returns player statistics that have changed in the last X minutes. Valid entries: 1 or 2
     * @return array
     */
    public function playerGameStatsDelta(int $minutes): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsDelta/{$minutes}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns player stats in the specified season and week, including only those updated in the last X minutes.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  int  $minutes  Only returns player statistics that have changed in the last X minutes. Valid entries: 1 or 2
     * @return array
     */
    public function playerGameStatsByWeekDelta(string $season, int $week, int $minutes): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByWeekDelta/{$season}/{$week}/{$minutes}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record team-wide for a given team's game (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function teamGameStatsFinal(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/TeamGameStatsFinal/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the box score statistical record team-wide for games in a given week (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function teamGameStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamGameStats/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-long stats for all players for the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function playerSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total stats for all players in a specified season and team.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  string  $team  Abbreviation of the team. Example: WAS
     * @return array
     */
    public function playerSeasonStatsByTeam(string $season, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonStatsByTeam/{$season}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total stats for all teams in a specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function teamSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamSeasonStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all of a player's box score logs for a given season.
     *
     * @param  string  $season  Season to get games from. Example: 2019POST, 2020
     * @param  int  $playerId  Unique FantasyData Player ID. Example: 17920
     * @param  string  $numberOfGames  How many games to return. Example: all, 10, 25
     * @return array
     */
    public function playerGameLogs(string $season, int $playerId, string $numberOfGames): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsBySeason/{$season}/{$playerId}/{$numberOfGames}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all of a team's box score logs for a given season.
     *
     * @param  string  $season  Season to get games from. Example: 2019POST, 2020
     * @param  int  $teamId  Unique ID of team. Example: 8
     * @param  string  $numberOfGames  How many games to return. Example: all, 10, 25
     * @return array
     */
    public function teamGameLogs(string $season, int $teamId, string $numberOfGames): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamGameStatsBySeason/{$season}/{$teamId}/{$numberOfGames}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all offensive red zone stats (inside the opponent's 20-yard line) for all players in a specified season or week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerGameRedZoneStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameRedZoneStats/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all offensive stats inside the opponent's 5-yard line for all players in a specified season or week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerGameRedZoneInsideFiveStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameRedZoneInsideFiveStats/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all offensive stats inside the opponent's 10-yard line for all players in a specified season or week.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @return array
     */
    public function playerGameRedZoneInsideTenStats(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameRedZoneInsideTenStats/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total offensive stats inside the opponent's 20-yard line (red zone) for all players in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function playerSeasonRedZoneStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonRedZoneStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total offensive stats inside the opponent's 5-yard line for all players in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function playerSeasonRedZoneInsideFiveStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonRedZoneInsideFiveStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total offensive stats inside the opponent's 10-yard line for all players in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function playerSeasonRedZoneInsideTenStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonRedZoneInsideTenStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-total third down stats for all players in a specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function playerSeasonThirdDownStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonThirdDownStats/{$season}");

        return $this->client->get($endpoint);
    }
}

