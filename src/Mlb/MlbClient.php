<?php

namespace Faisuc\SportsdataioPhpSdk\Mlb;

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\BettingResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\CompetitionResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\EventResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\FantasyResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\NewsResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\PlayerResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\StatsResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\TeamResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\UtilityResource;
use Faisuc\SportsdataioPhpSdk\Mlb\Resources\VenueResource;

class MlbClient
{
    protected Client $client;

    protected ?CompetitionResource $competition = null;

    protected ?TeamResource $teams = null;

    protected ?PlayerResource $players = null;

    protected ?VenueResource $venues = null;

    protected ?EventResource $events = null;

    protected ?StatsResource $stats = null;

    protected ?BettingResource $betting = null;

    protected ?FantasyResource $fantasy = null;

    protected ?NewsResource $news = null;

    protected ?UtilityResource $utility = null;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Competition feeds (Standings, Rankings & Brackets)
     */
    public function competition(): CompetitionResource
    {
        if ($this->competition === null) {
            $this->competition = new CompetitionResource($this->client, 'mlb');
        }

        return $this->competition;
    }

    /**
     * Teams, Players & Rosters
     */
    public function teams(): TeamResource
    {
        if ($this->teams === null) {
            $this->teams = new TeamResource($this->client, 'mlb');
        }

        return $this->teams;
    }

    /**
     * Player-related endpoints
     */
    public function players(): PlayerResource
    {
        if ($this->players === null) {
            $this->players = new PlayerResource($this->client, 'mlb');
        }

        return $this->players;
    }

    /**
     * Venues & Officials
     */
    public function venues(): VenueResource
    {
        if ($this->venues === null) {
            $this->venues = new VenueResource($this->client, 'mlb');
        }

        return $this->venues;
    }

    /**
     * Event Feeds (Schedules & Game Day Info, Scores & Game State, Play by Play)
     */
    public function events(): EventResource
    {
        if ($this->events === null) {
            $this->events = new EventResource($this->client, 'mlb');
        }

        return $this->events;
    }

    /**
     * Team & Player Stats
     */
    public function stats(): StatsResource
    {
        if ($this->stats === null) {
            $this->stats = new StatsResource($this->client, 'mlb');
        }

        return $this->stats;
    }

    /**
     * Betting Feeds
     */
    public function betting(): BettingResource
    {
        if ($this->betting === null) {
            $this->betting = new BettingResource($this->client, 'mlb');
        }

        return $this->betting;
    }

    /**
     * Fantasy Feeds
     */
    public function fantasy(): FantasyResource
    {
        if ($this->fantasy === null) {
            $this->fantasy = new FantasyResource($this->client, 'mlb');
        }

        return $this->fantasy;
    }

    /**
     * News & Images
     */
    public function news(): NewsResource
    {
        if ($this->news === null) {
            $this->news = new NewsResource($this->client, 'mlb');
        }

        return $this->news;
    }

    /**
     * Utility Endpoints
     */
    public function utility(): UtilityResource
    {
        if ($this->utility === null) {
            $this->utility = new UtilityResource($this->client, 'mlb');
        }

        return $this->utility;
    }
}
