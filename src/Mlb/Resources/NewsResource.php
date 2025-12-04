<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb\Resources;

use Faisuc\SportsdataioPhpSdk\Resource;

class NewsResource extends Resource
{
    /**
     * Returns basic RotoBaller news feed, with limited stories available - usually 0-1 stories per day. Ideal for test purposes.
     */
    public function news(): array
    {
        $endpoint = $this->buildEndpoint('scores/json/News');

        return $this->client->get($endpoint);
    }

    /**
     * Returns basic RotoBaller news feed by date.
     *
     * @param  string  $date  The date of the news. Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function newsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("scores/json/NewsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns basic RotoBaller news feed by player ID.
     *
     * @param  int  $playerId  Unique FantasyData Player ID. Example: 10000507
     */
    public function newsByPlayer(int $playerId): array
    {
        $endpoint = $this->buildEndpoint("scores/json/NewsByPlayerID/{$playerId}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns RotoBaller's Premium News feed, with the latest updated stories in greater detail.
     */
    public function premiumNews(): array
    {
        $endpoint = $this->buildEndpoint('news-rotoballer/json/RotoBallerPremiumNews');

        return $this->client->get($endpoint);
    }

    /**
     * Returns RotoBaller's Premium News feed by date.
     *
     * @param  string  $date  The date of the news. Format: yyyy-MM-dd. Examples: 2017-07-31, 2017-09-01
     */
    public function premiumNewsByDate(string $date): array
    {
        $endpoint = $this->buildEndpoint("news-rotoballer/json/RotoBallerPremiumNewsByDate/{$date}");

        return $this->client->get($endpoint);
    }

    /**
     * Returns USA Today/IMAGN cropped action headshots for all active MLB players.
     */
    public function headshots(): array
    {
        $endpoint = $this->buildEndpoint('headshots/json/Headshots');

        return $this->client->get($endpoint);
    }
}
