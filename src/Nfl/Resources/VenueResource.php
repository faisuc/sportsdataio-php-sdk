<?php

namespace Faisuc\SportsdataioPhpSdk\Nfl\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class VenueResource extends Resource
{
    /**
     * Returns all stadiums with capacity, address, latitude/longitude, city, state, and country.
     */
    public function stadiums(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Stadiums');

        return $this->client->get($endpoint);
    }

    /**
     * Returns referees with name, numbers, position, college, and years of experience.
     */
    public function referees(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Referees');

        return $this->client->get($endpoint);
    }
}
