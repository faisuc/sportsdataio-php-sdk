<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class EventResource extends Resource
{
    /**
     * Returns game details including home and away teams, date and time, season type, week, and gameday info.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     */
    public function schedules(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Schedules/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a lightweight schedule with home and away teams, game date and time, season type, and week.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     */
    public function schedulesBasic(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/SchedulesBasic/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games on the specified date (Final only).
     *
     * @param  string  $date  The date of the games. Format: yyyy-MM-dd. Examples: 2021-09-12, 2021-11-28
     */
    public function scoresByDateFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresByDateFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games on the specified date (Live & Final).
     *
     * @param  string  $date  The date of the games. Format: yyyy-MM-dd. Examples: 2021-09-12, 2021-11-28
     */
    public function scoresByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games in the specified season (Final only).
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     */
    public function scoresBySeasonFinal(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresFinal/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games in the specified season (Live & Final).
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     */
    public function scoresBySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Scores/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games in the specified week (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     */
    public function scoresByWeekFinal(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresByWeekFinal/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games in the specified week (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     */
    public function scoresByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a simplified score summary with quarter-by-quarter scores and final score (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     */
    public function scoresBasicFinal(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresBasicFinal/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a simplified score summary with quarter-by-quarter scores (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     */
    public function scoresBasic(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresBasic/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified game (Final only).
     *
     * @param  int  $gameId  The GameID of a NFL game
     */
    public function playByPlayFinal(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlayFinal/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified game (Live & Final).
     *
     * @param  int  $gameId  The GameID of a NFL game
     */
    public function playByPlay(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlay/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified team (Final only).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $homeTeam  Abbreviation of the home team. Example: WAS
     */
    public function playByPlayByTeamFinal(string $season, int $week, string $homeTeam): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlayFinal/{$season}/{$week}/{$homeTeam}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified team (Live & Final).
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  string  $homeTeam  Abbreviation of the home team. Example: WAS
     */
    public function playByPlayByTeam(string $season, int $week, string $homeTeam): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlay/{$season}/{$week}/{$homeTeam}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all play-by-play for the specified season and week, but only returns plays that have changed in the last X minutes.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @param  int  $week  Week of the season. Valid values: Preseason 0 to 4, Regular Season 1 to 17, Postseason 1 to 4
     * @param  int  $minutes  Only returns plays that have changed in the last X minutes. Valid entries: 1 or 2
     */
    public function playByPlayDelta(string $season, int $week, int $minutes): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlayDelta/{$season}/{$week}/{$minutes}");

        return $this->client->get($endpoint);
    }
}
