<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class EventResource extends Resource
{
    /**
     * Returns a full schedule of games for the specified season. Including home and away teams, date, start time, stadium, and game status.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     * @return array
     */
    public function schedulesBasic(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/SchedulesBasic/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a full schedule of games for the specified season. Includes home and away teams, dates, start time, stadium, broadcast channel, game status, inning, pre-game lines (moneyline, spread, total runs), and gameday information like probable pitchers, current pitcher, current hitter, last play, etc.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2018, 2018PRE, 2018POST, 2018STAR, 2019
     * @return array
     */
    public function schedules(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Games/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games on the specified date. Includes home and away teams, date, start time, stadium, game status.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function scoresBasicFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresBasicFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games on the specified date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function scoresBasic(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/ScoresBasic/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns final scores for games on the specified date. Including home and away teams, dates, start time, stadium, broadcast channel, game status, inning, pre-game lines (moneyline, spread, total runs), weather, and gameday information like probable pitchers, current pitcher, current hitter, last play, etc.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function scoresByDateFinal(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/GamesByDateFinal/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns scores for games on the specified date. Including home and away teams, dates, start time, stadium, broadcast channel, game status, inning, pre-game lines (moneyline, spread, total runs), weather, and gameday information like probable pitchers, current pitcher, current hitter, last play, etc.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @return array
     */
    public function scoresByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/GamesByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified GameID, its type and outcomes, complete with player and team stats. All of which is delivered after the game (Final only).
     *
     * @param  int  $gameId  The GameID of an MLB game
     * @return array
     */
    public function playByPlayFinal(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlayFinal/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all plays for the specified GameID, its type and outcomes, complete with player and team stats. All of which is delivered during and after the game (Live & Final).
     *
     * @param  int  $gameId  The GameID of an MLB game
     * @return array
     */
    public function playByPlay(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlay/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns all play-by-plays for the specified date, but only returns plays that have changed in the last X minutes as specified in your API call.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     * @param  string  $minutes  Only returns plays that have changed in the last X minutes. Valid entries: 1, 2 ... all
     * @return array
     */
    public function playByPlayDelta(string $date, string $minutes): array
    {
        $endpoint = $this->buildEndpoint("pbp/json/PlayByPlayDelta/{$date}/{$minutes}");

        return $this->client->get($endpoint);
    }
}

