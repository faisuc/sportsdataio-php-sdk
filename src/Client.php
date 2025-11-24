<?php

namespace Faisuc\SportsdataioPhpSdk;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Client
{
    protected GuzzleClient $httpClient;

    protected string $apiKey;

    protected string $baseUrl = 'https://api.sportsdata.io/v3/';

    protected string $bakerBaseUrl = 'https://baker-api.sportsdata.io/baker/v2/';

    public function __construct(string $apiKey, ?GuzzleClient $httpClient = null)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient ?? new GuzzleClient([
            'base_uri' => $this->baseUrl,
            'timeout' => 30,
            'headers' => [
                'Ocp-Apim-Subscription-Key' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * Make a GET request to the API
     *
     *
     * @throws GuzzleException
     */
    public function get(string $endpoint, array $queryParams = [], bool $useBakerApi = false): mixed
    {
        $baseUrl = $useBakerApi ? $this->bakerBaseUrl : $this->baseUrl;
        $url = $baseUrl.$endpoint;

        $queryParams['key'] = $this->apiKey;

        if ($useBakerApi) {
            $client = new GuzzleClient([
                'base_uri' => $this->bakerBaseUrl,
                'timeout' => 30,
                'headers' => [
                    'Ocp-Apim-Subscription-Key' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]);
        } else {
            $client = $this->httpClient;
        }

        $response = $client->get($endpoint, [
            'query' => $queryParams,
        ]);

        return $this->decodeResponse($response);
    }

    /**
     * Decode the JSON response
     */
    protected function decodeResponse(ResponseInterface $response): mixed
    {
        $body = $response->getBody()->getContents();
        $decoded = json_decode($body, true);

        if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
            return [];
        }

        return $decoded;
    }

    /**
     * Get the API key
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * Set a custom base URL (useful for testing)
     */
    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = rtrim($baseUrl, '/').'/';
        $this->httpClient = new GuzzleClient([
            'base_uri' => $this->baseUrl,
            'timeout' => 30,
            'headers' => [
                'Ocp-Apim-Subscription-Key' => $this->apiKey,
                'Accept' => 'application/json',
            ],
        ]);
    }
}
