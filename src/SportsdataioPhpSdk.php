<?php

namespace Faisuc\SportsdataioPhpSdk;

use Faisuc\SportsdataioPhpSdk\Nfl\NflClient;

class SportsdataioPhpSdk
{
    protected Client $client;

    protected ?NflClient $nfl = null;

    public function __construct(string $apiKey, ?Client $client = null)
    {
        $this->client = $client ?? new Client($apiKey);
    }

    /**
     * Get the NFL client
     *
     * @return NflClient
     */
    public function nfl(): NflClient
    {
        if ($this->nfl === null) {
            $this->nfl = new NflClient($this->client);
        }

        return $this->nfl;
    }

    /**
     * Get the base HTTP client
     *
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}

