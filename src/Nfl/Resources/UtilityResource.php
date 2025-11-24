<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class UtilityResource extends Resource
{
    /**
     * Returns true if there is at least one game being played at the time of the request or false if there are none.
     *
     * @return bool
     */
    public function areGamesInProgress(): bool
    {
        $endpoint = $this->buildEndpoint('scores/json/AreAnyGamesInProgress');

        $result = $this->client->get($endpoint);

        return $result === true;
    }

    /**
     * Returns the list of MarketTypes, BetTypes, PeriodTypes, OutcomeTypes, and ResultTypes.
     *
     * @return array
     */
    public function bettingMetadata(): array
    {
        $endpoint = $this->buildEndpoint('odds/json/BettingMetadata');

        return $this->client->get($endpoint);
    }

    /**
     * Returns bye weeks for all teams in the specified season.
     *
     * @param  string  $season  Year of the season and the season type. Examples: 2015REG, 2015PRE, 2015POST
     * @return array
     */
    public function byeWeeks(string $season): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Byes/{$season}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the calendar year of the current season.
     *
     * @return int|null
     */
    public function currentSeason(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/CurrentSeason');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns the year of the most recently completed NFL season.
     *
     * @return int|null
     */
    public function lastCompletedSeason(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/LastCompletedSeason');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns the year of the current NFL season if in-season, or the next upcoming season if in the offseason.
     *
     * @return int|null
     */
    public function upcomingSeason(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/UpcomingSeason');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns a list of all available sportsbooks with their associated unique IDs.
     *
     * @return array
     */
    public function activeSportsbooks(): array
    {
        $endpoint = $this->buildEndpoint('odds/json/ActiveSportsbooks');

        return $this->client->get($endpoint);
    }

    /**
     * Returns current timeframes, including week, season phase, and overall season status.
     *
     * @param  string  $type  The type of timeframes to return. Valid entries: current, upcoming, completed, recent, all
     * @return array
     */
    public function timeframes(string $type): array
    {
        $endpoint = $this->buildEndpoint("scores/json/Timeframes/{$type}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns the current week number.
     *
     * @return int|null
     */
    public function currentWeek(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/CurrentWeek');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns the number of the last completed NFL week.
     *
     * @return int|null
     */
    public function lastCompletedWeek(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/LastCompletedWeek');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns the number of the next upcoming week.
     *
     * @return int|null
     */
    public function upcomingWeek(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/UpcomingWeek');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }
}

