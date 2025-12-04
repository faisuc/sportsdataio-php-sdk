<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class BettingResource extends Resource
{
    /**
     * Returns the full-game odds (moneyline, spread, total) for games in the specified date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2018-06-20, 2018-06-23
     */
    public function preGameOddsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("odds/json/GameOddsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the full-game and non-full-game odds (spread, moneyline, total) for games on the specified date (with Sportsbook Group).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2018-06-20, 2018-06-23
     * @param  string  $sportsbookGroup  The name of the sportsbook group that will filter outcomes
     */
    public function preGameAndPeriodOddsByDate(string $date, string $sportsbookGroup): array
    {
        $endpoint = $this->buildEndpoint("odds/json/PreGameOddsByDate/{$date}/{$sportsbookGroup}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the non-full-game odds (spread, moneyline, total) for games on the specified date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2018-06-20, 2018-06-23
     */
    public function periodGameOddsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("odds/json/AlternateMarketGameOddsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns in-play game odds (spread, moneyline, total) for games on the specified date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2018-06-20, 2018-06-23
     */
    public function inGameOddsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("odds/json/LiveGameOddsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns in-play game odds (spread, moneyline, total) for games on the specified date (with Sportsbook Group).
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2018-06-20, 2018-06-23
     * @param  string  $sportsbookGroup  The name of the sportsbook group that will filter outcomes
     */
    public function inGameOddsByDateWithSportsbookGroup(string $date, string $sportsbookGroup): array
    {
        $endpoint = $this->buildEndpoint("odds/json/InGameOddsByDate/{$date}/{$sportsbookGroup}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns BettingEvents for the specified date, from which Betting Market data can be gathered.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2020-08-20, 2020-08-23
     */
    public function bettingEventsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingEventsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns BettingEvents for the specified season, from which Betting Market data can be gathered.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2020, 2020PRE, 2020POST, 2020STAR, 2021
     */
    public function bettingEventsBySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingEvents/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the markets of all available types (e.g. Player Props, Team Props) and available outcomes for the specified BettingEventID.
     *
     * @param  string  $eventId  The EventId of the desired event/game for which to pull all betting markets
     * @param  string|null  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     */
    public function bettingMarketsByEvent(string $eventId, ?string $include = null): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarkets/{$eventId}");
        $queryParams = [];

        if ($include !== null) {
            $queryParams['include'] = $include;
        }

        return $this->client->get($endpoint, $queryParams);
    }

    /**
     * Returns the markets of all available types (e.g. Player Props, Team Props) and available outcomes for the specified GameID.
     *
     * @param  int  $gameId  The GameID of the desired game for which to pull all betting markets
     * @param  string|null  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     */
    public function bettingMarketsByGame(int $gameId, ?string $include = null): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarketsByGameID/{$gameId}");
        $queryParams = [];

        if ($include !== null) {
            $queryParams['include'] = $include;
        }

        return $this->client->get($endpoint, $queryParams);
    }

    /**
     * Returns player props available in the specified game.
     *
     * @param  int  $gameId  The unique GameID of the game in question
     */
    public function bettingPlayerPropsByGame(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingPlayerPropsByGameID/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns available Futures markets for the specified season.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2020, 2020PRE, 2020POST, 2020STAR, 2021
     */
    public function bettingFuturesBySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingFuturesBySeason/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns trends data for the specified pairing of teams (team vs opponent).
     *
     * @param  string  $team  The abbreviation of the requested team. Examples: PHI, MIN, DET
     * @param  string  $opponent  The abbreviation of the requested opponent. Examples: PHI, MIN, DET
     */
    public function bettingTrendsByMatchup(string $team, string $opponent): array
    {
        $endpoint = $this->buildEndpoint("odds/json/MatchupTrends/{$team}/{$opponent}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns recent team trends and performance against betting lines in recent sets of games.
     *
     * @param  string  $team  The abbreviation of the requested team. Examples: PHI, MIN, DET
     */
    public function bettingTrendsByTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("odds/json/TeamTrends/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of Money and Bet Percentage splits for each outcome type available in the specified game.
     *
     * @param  int  $gameId  The ID of the game for which you want to receive splits for
     */
    public function bettingSplitsByGame(int $gameId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingSplitsByGameId/{$gameId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of Money and Bet Percentage splits for each outcome type available in the specified market.
     *
     * @param  string  $marketId  The MarketId of the desired market for which to pull splits
     */
    public function bettingSplitsByMarket(string $marketId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingSplitsByMarketId/{$marketId}");

        return $this->client->get($endpoint);
    }
}
