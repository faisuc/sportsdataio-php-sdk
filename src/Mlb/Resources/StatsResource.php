<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class StatsResource extends Resource
{
    /**
     * Returns all statistics for a game, including team and player stats, after the game has been completed (Final only).
     *
     * @param  int  $gameId  The GameID of an MLB game
     * @return array
     */
    public function boxScoreFinal(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoreFinal/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all statistics for a game, including team and player stats, during and after games (Live & Final).
     *
     * @param  int  $gameId  The GameID of an MLB game
     * @return array
     */
    public function boxScore(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScore/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all statistics for games on a specified date, including team and player stats, after the game has been completed (Final only).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function boxScoresFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoresFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all statistics for all games on a specified date, including team and player stats, during and after games (Live & Final).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function boxScores(string $date): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScores/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all stats for the specified date, only returning player stats that have changed in the last X minutes (Live & Final).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @param  string  $minutes  Only returns player statistics that have changed in the last X minutes. Valid entries: 1, 2 ... all
     * @return array
     */
    public function boxScoresDelta(string $date, string $minutes): array
    {
        $endpoint = $this->buildEndpoint("stats/json/BoxScoresDelta/{$date}/{$minutes}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns box score stats for all players that participated across all games for the specified date. Data is added for players once their respective game concludes (Final only).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function playerGameStatsByDateFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByDateFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns box score stats for all players that participated across all games for the specified date during and after games (Live & Final).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function playerGameStatsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns box score stats for each team for a specified date. Team stats are an aggregation of all player stats. Data is updated as each game is completed (Final only).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function teamGameStatsByDateFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamGameStatsByDateFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns team stats for a specified team's game in a specific week. All of which is delivered during and after games (Live & Final).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function teamGameStatsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamGameStatsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-long stats for all players on a team for the specified season.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @return array
     */
    public function playerSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-long stats for players based on their away games.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @return array
     */
    public function playerSeasonStatsByAway(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonAwayStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-long stats for players based on their home games.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @return array
     */
    public function playerSeasonStatsByHome(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonHomeStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all season-long stats (i.e. the season total, not each individual game record) for the specified team's players in the specified season.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @param  string  $team  The abbreviation of the requested team. Examples: SF, NYY
     * @return array
     */
    public function playerSeasonStatsByTeam(string $season, string $team): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonStatsByTeam/{$season}/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all players' split stats for the season. Split stats are available for left, right, and switch-handed pitchers and hitters.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @param  string  $split  The desired split of stats. Possible values: L, R and S
     * @return array
     */
    public function playerSeasonSplitStats(string $season, string $split): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonSplitStats/{$season}/{$split}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns team's players' split stats for the season. Split stats are available for left, right, and switch-handed pitchers and hitters.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @return array
     */
    public function playerSeasonStatsSplitByTeam(string $season): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerSeasonStatsSplitByTeam/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns season-long stats for a specified team in a specified season.
     *
     * @param  string  $season  Year of the season. Examples: 2017, 2018
     * @return array
     */
    public function teamSeasonStats(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamSeasonStats/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a specified players box score logs for the specified season and number of games.
     *
     * @param  string  $season  Season to get games from. Example: 2019POST, 2020
     * @param  int  $playerId  Unique FantasyData Player ID. Example: 10001365
     * @param  string  $numberOfGames  How many games to return. Example: all, 10, 25
     * @return array
     */
    public function playerGameLogs(string $season, int $playerId, string $numberOfGames): array
    {
        $endpoint = $this->buildEndpoint("stats/json/PlayerGameStatsBySeason/{$season}/{$playerId}/{$numberOfGames}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns game by game logs for given team's total statistics in a specified season.
     *
     * @param  string  $season  Season to get games from. Example: 2019POST, 2020
     * @param  int  $teamId  Unique ID of team. Example: 12
     * @param  string  $numberOfGames  How many games to return. Example: all, 10, 25
     * @return array
     */
    public function teamGameLogs(string $season, int $teamId, string $numberOfGames): array
    {
        $endpoint = $this->buildEndpoint("scores/json/TeamGameStatsBySeason/{$season}/{$teamId}/{$numberOfGames}");

        return $this->client->get($endpoint);
    }
}

