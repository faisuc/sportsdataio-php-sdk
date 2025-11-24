<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class BettingResource extends Resource
{
    /**
     * Returns the full-game odds (moneyline, spread, total) for games in the specified week.
     *
     * @param  string  $season  Year of the season, with optional season type. Examples: 2018, 2018POST
     * @param  int  $week  The week of the scores (games). Examples: 1, 2
     * @return array
     */
    public function preGameOddsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("odds/json/GameOddsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the full-game and non-full-game odds for games in the specified week (with Sportsbook Group).
     *
     * @param  string  $season  Year of the season, with optional season type. Examples: 2018, 2018POST
     * @param  int  $week  The week of the scores (games). Examples: 1, 2
     * @param  string  $sportsbookGroup  The name of the Sportsbook grouping. Examples: G1100
     * @return array
     */
    public function preGameAndPeriodOddsByWeek(string $season, int $week, string $sportsbookGroup): array
    {
        $endpoint = $this->buildEndpoint("odds/json/PreGameOddsByWeek/{$season}/{$week}/{$sportsbookGroup}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the non-full-game odds (spread, moneyline, total) for games in the specified week.
     *
     * @param  string  $season  Year of the season, with optional season type. Examples: 2018, 2018POST
     * @param  int  $week  The week of the scores (games). Examples: 1, 2
     * @return array
     */
    public function periodGameOddsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("odds/json/AlternateMarketGameOddsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the full-game core odds for a specified game with line movement.
     *
     * @param  int  $scoreId  The ScoreID of an NFL score (game)
     * @return array
     */
    public function preGameOddsLineMovement(int $scoreId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/GameOddsLineMovement/{$scoreId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns in-play game odds (spread, moneyline, total) for games in the specified week.
     *
     * @param  string  $season  Year of the season, with optional season type. Examples: 2018, 2018POST
     * @param  int  $week  The week of the scores (games). Examples: 1, 2
     * @return array
     */
    public function inGameOddsByWeek(string $season, int $week): array
    {
        $endpoint = $this->buildEndpoint("odds/json/LiveGameOddsByWeek/{$season}/{$week}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns in-play game odds for games in the specified week (with Sportsbook Group).
     *
     * @param  string  $season  Year of the season, with optional season type. Examples: 2018, 2018POST
     * @param  int  $week  The week of the scores (games). Examples: 1, 2
     * @param  string  $sportsbookGroup  The name of the Sportsbook grouping. Examples: G1100
     * @return array
     */
    public function inGameOddsByWeekWithGroup(string $season, int $week, string $sportsbookGroup): array
    {
        $endpoint = $this->buildEndpoint("odds/json/InGameOddsByWeek/{$season}/{$week}/{$sportsbookGroup}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns in-play game odds line movement for the specified game.
     *
     * @param  int  $scoreId  The ScoreID of an NFL score (game)
     * @return array
     */
    public function inGameOddsLineMovement(int $scoreId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/LiveGameOddsLineMovement/{$scoreId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns BettingEvents for the specified date.
     *
     * @param  string  $date  The date of the game(s). Format: yyyy-MM-dd. Examples: 2020-09-10, 2020-09-13
     * @return array
     */
    public function bettingEventsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingEventsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns BettingEvents for the specified season.
     *
     * @param  string  $season  Year of the season. Examples: 2020, 2021
     * @return array
     */
    public function bettingEvents(string $season): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingEvents/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the markets of all available types and available outcomes for the specified BettingEventID.
     *
     * @param  string  $eventId  The EventId of the desired event/game
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingMarketsByEvent(string $eventId, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarkets/{$eventId}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns the markets and available outcomes for the specified BettingEventID (with Sportsbook Group).
     *
     * @param  string  $eventId  The EventId of the desired event/game
     * @param  string  $sportsbookGroup  The name of the Sportsbook grouping. Examples: G1100
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingMarketsByEventWithGroup(string $eventId, string $sportsbookGroup, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarketsByEvent/{$eventId}/{$sportsbookGroup}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns the markets of all available types and available outcomes for the specified GameID.
     *
     * @param  int  $scoreId  The ScoreID of the desired game/score
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingMarketsByGame(int $scoreId, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarketsByScoreID/{$scoreId}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns the markets of all available types and available outcomes for the specified GameID (with Sportsbook Group).
     *
     * @param  int  $gameId  The GameID of the desired game/score
     * @param  string  $sportsbookGroup  The name of the Sportsbook grouping. Examples: G1100
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingMarketsByGameWithGroup(int $gameId, string $sportsbookGroup, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarketsByGameID/{$gameId}/{$sportsbookGroup}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns markets and available outcomes for the specified event and market type.
     *
     * @param  string  $eventId  The EventId of the desired event/game
     * @param  string  $marketTypeId  The Market Type ID. Some common types: 1 for Game Lines, 2 for Player Props, 3 for Team Props, 6 for Game Props
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingMarketsByMarketType(string $eventId, string $marketTypeId, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingMarketsByMarketType/{$eventId}/{$marketTypeId}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns player props available in the specified game.
     *
     * @param  int  $scoreId  The unique ScoreID of the game in question
     * @param  string  $include  This parameter indicates which BettingOutcome records to return. Possible values: available, unlisted
     * @return array
     */
    public function bettingPlayerPropsByGame(int $scoreId, string $include = 'available'): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingPlayerPropsByScoreID/{$scoreId}");

        return $this->client->get($endpoint, ['include' => $include]);
    }

    /**
     * Returns available Futures markets for the specified season.
     *
     * @param  string  $season  Year of the season (with optional season type). Examples: 2020REG, 2020PRE, 2020POST, 2021
     * @return array
     */
    public function bettingFuturesBySeason(string $season): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingFuturesBySeason/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns trends data for a specified pairing of teams.
     *
     * @param  string  $team  Abbreviation of a team. Example: PHI
     * @param  string  $opponent  Abbreviation of an opponent. Example: NE
     * @return array
     */
    public function bettingTrendsByMatchup(string $team, string $opponent): array
    {
        $endpoint = $this->buildEndpoint("odds/json/MatchupTrends/{$team}/{$opponent}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns recent team trends and performance against betting data in recent sets of games.
     *
     * @param  string  $team  Abbreviation of a team. Example: PHI
     * @return array
     */
    public function bettingTrendsByTeam(string $team): array
    {
        $endpoint = $this->buildEndpoint("odds/json/TeamTrends/{$team}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of Money and Bet Percentage splits for each outcome type available in the specified market.
     *
     * @param  string  $marketId  The BettingMarketID of the market
     * @return array
     */
    public function bettingSplitsByMarket(string $marketId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingSplitsByMarketId/{$marketId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns a list of Money and Bet Percentage splits for each outcome type available in the specified game.
     *
     * @param  int  $scoreId  The ScoreID of the desired game
     * @return array
     */
    public function bettingSplitsByGame(int $scoreId): array
    {
        $endpoint = $this->buildEndpoint("odds/json/BettingSplitsByScoreId/{$scoreId}");

        return $this->client->get($endpoint);
    }
}

