<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class UtilityResource extends Resource
{
    /**
     * Returns true if there is at least one game being played at the time of the request or false if there are none.
     */
    public function areGamesInProgress(): bool
    {
        $endpoint = $this->buildEndpoint('scores/json/AreAnyGamesInProgress');

        $result = $this->client->get($endpoint);

        return $result === true;
    }

    /**
     * Returns the list of MarketTypes, BetTypes, PeriodTypes, OutcomeTypes, and ResultTypes to map the IDs to descriptive names. Also includes a list of the MarketType, BetType & PeriodType combinations which we will have resulting for.
     */
    public function bettingMetadata(): array
    {
        $endpoint = $this->buildEndpoint('odds/json/BettingMetadata');

        return $this->client->get($endpoint);
    }

    /**
     * Returns the calendar year of the current season.
     */
    public function currentSeason(): ?int
    {
        $endpoint = $this->buildEndpoint('scores/json/CurrentSeason');

        $result = $this->client->get($endpoint);

        return is_int($result) ? $result : null;
    }

    /**
     * Returns a list of all available sportsbooks with their associated unique IDs.
     */
    public function activeSportsbooks(): array
    {
        $endpoint = $this->buildEndpoint('odds/json/ActiveSportsbooks');

        return $this->client->get($endpoint);
    }
}
