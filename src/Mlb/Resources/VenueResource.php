<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class VenueResource extends Resource
{
    /**
     * Returns all stadiums with capacity, surface, field dimensions, home plate direction, latitude/longitude, city and state (and country for stadiums outside of the United States).
     *
     * @return array
     */
    public function stadiums(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/Stadiums');

        return $this->client->get($endpoint);
    }
}

