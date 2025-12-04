<?php

namespace Faisuc\SportsdataioPhpSdk;

abstract class Resource
{
    protected Client $client;

    protected string $sport;

    public function __construct(Client $client, string $sport)
    {
        $this->client = $client;
        $this->sport = $sport;
    }

    /**
     * Build the endpoint URL
     *
     * @param  string  $path  The API path (already includes format, e.g., "scores/json/Standings/{$season}")
     */
    protected function buildEndpoint(string $path): string
    {
        return "{$this->sport}/{$path}";
    }

    /**
     * Build the Baker API endpoint URL
     */
    protected function buildBakerEndpoint(string $path): string
    {
        return "{$this->sport}/{$path}";
    }
}
