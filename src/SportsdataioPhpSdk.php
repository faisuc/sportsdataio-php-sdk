<?php

namespace Faisuc\SportsdataioPhpSdk;

use Faisuc\SportsdataioPhpSdk\Mlb\MlbClient;
use Faisuc\SportsdataioPhpSdk\Nfl\NflClient;

class SportsdataioPhpSdk
{
    protected Client $client;

    protected ?NflClient $nfl = null;

    protected ?MlbClient $mlb = null;

    public function __construct(string $apiKey, ?Client $client = null)
    {
        $this->client = $client ?? new Client($apiKey);
    }

    /**
     * Get the NFL client
     */
    public function nfl(): NflClient
    {
        if ($this->nfl === null) {
            $this->nfl = new NflClient($this->client);
        }

        return $this->nfl;
    }

    /**
     * Get the MLB client
     */
    public function mlb(): MlbClient
    {
        if ($this->mlb === null) {
            $this->mlb = new MlbClient($this->client);
        }

        return $this->mlb;
    }

    /**
     * Get the base HTTP client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}
