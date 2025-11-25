# SportsData.io PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faisuc/sportsdataio-php-sdk.svg?style=flat-square)](https://packagist.org/packages/faisuc/sportsdataio-php-sdk)
[![Tests](https://img.shields.io/github/actions/workflow/status/faisuc/sportsdataio-php-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/faisuc/sportsdataio-php-sdk/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/faisuc/sportsdataio-php-sdk.svg?style=flat-square)](https://packagist.org/packages/faisuc/sportsdataio-php-sdk)

A comprehensive PHP SDK for the SportsData.io API.

## Features

- ✅ Type-safe method calls
- ✅ Comprehensive test coverage with Pest
- ✅ Well-documented codebase
- ✅ PSR-4 autoloading compliant
- ✅ Flexible architecture for multiple sports

## Installation

You can install the package via composer:

```bash
composer require faisuc/sportsdataio-php-sdk
```

## Usage

### Basic Setup

```php
use Faisuc\SportsdataioPhpSdk\SportsdataioPhpSdk;

$sdk = new SportsdataioPhpSdk('your-api-key-here');
```

## NFL

### API Coverage

The NFL implementation supports all available endpoints including:

- Competition Feeds (Standings, Rankings & Brackets)
- Teams, Players & Rosters
- Venues & Officials
- Event Feeds (Schedules, Scores, Play by Play)
- Team & Player Stats
- Betting Feeds (Game Lines, Props, Futures, Trends)
- Fantasy Feeds (Projections, Salaries, Stats & Points)
- News & Images
- Utility Endpoints

### Examples

#### Competition Feeds

```php
// Get standings for a season
$standings = $sdk->nfl()->competition()->standings('2023REG');
```

#### Teams & Players

```php
// Get all active teams
$teams = $sdk->nfl()->teams()->allActive();

// Get all players
$players = $sdk->nfl()->players()->all();

// Get players by team
$teamPlayers = $sdk->nfl()->players()->byTeam('WAS');

// Get free agents
$freeAgents = $sdk->nfl()->players()->freeAgents();
```

#### Events & Scores

```php
// Get schedules for a season
$schedules = $sdk->nfl()->events()->schedules('2023REG');

// Get scores by week (live & final)
$scores = $sdk->nfl()->events()->scoresByWeek('2023REG', 1);

// Get play by play for a game
$playByPlay = $sdk->nfl()->events()->playByPlay(12345);
```

#### Statistics

```php
// Get box score for a game
$boxScore = $sdk->nfl()->stats()->boxScore(12345);

// Get player season stats
$playerStats = $sdk->nfl()->stats()->playerSeasonStats('2023REG');

// Get team season stats
$teamStats = $sdk->nfl()->stats()->teamSeasonStats('2023REG');
```

#### Betting

```php
// Get pre-game odds by week
$odds = $sdk->nfl()->betting()->preGameOddsByWeek('2023REG', 1);

// Get betting markets by game
$markets = $sdk->nfl()->betting()->bettingMarketsByGame(12345);

// Get betting trends by matchup
$trends = $sdk->nfl()->betting()->bettingTrendsByMatchup('PHI', 'NE');
```

#### Fantasy

```php
// Get projected player game stats
$projections = $sdk->nfl()->fantasy()->projectedPlayerGameStatsByWeek('2023REG', 1);

// Get DFS slates by week
$slates = $sdk->nfl()->fantasy()->dfsSlatesByWeek('2023REG', 1);

// Get fantasy points by week
$fantasyPoints = $sdk->nfl()->fantasy()->fantasyPointsByWeek('2023REG', 1);
```

#### News

```php
// Get latest news
$news = $sdk->nfl()->news()->news();

// Get news by team
$teamNews = $sdk->nfl()->news()->newsByTeam('WAS');

// Get premium news
$premiumNews = $sdk->nfl()->news()->premiumNews();
```

#### Utility

```php
// Check if games are in progress
$inProgress = $sdk->nfl()->utility()->areGamesInProgress();

// Get current season
$currentSeason = $sdk->nfl()->utility()->currentSeason();

// Get current week
$currentWeek = $sdk->nfl()->utility()->currentWeek();
```

## MLB

### API Coverage

The MLB implementation supports all available endpoints including:

- Competition Feeds (Standings, Rankings & Brackets)
- Teams, Players & Rosters
- Venues & Officials
- Event Feeds (Schedules, Scores, Play by Play)
- Team & Player Stats
- Betting Feeds (Game Lines, Props, Futures, Trends)
- Fantasy Feeds (Projections, Salaries, Stats & Points)
- News & Images
- Utility Endpoints

### Examples

#### Competition Feeds

```php
// Get standings for a season
$standings = $sdk->mlb()->competition()->standings('2023');
```

#### Teams & Players

```php
// Get all active teams
$teams = $sdk->mlb()->teams()->allActive();

// Get all teams
$allTeams = $sdk->mlb()->teams()->all();

// Get teams by season
$teamsBySeason = $sdk->mlb()->teams()->bySeason('2023REG');

// Get all active players
$players = $sdk->mlb()->players()->allActive();

// Get free agents
$freeAgents = $sdk->mlb()->players()->freeAgents();

// Get players by team
$teamPlayers = $sdk->mlb()->players()->byTeam('NYY');

// Get player details with injuries
$playerDetails = $sdk->mlb()->players()->detailsActive();

// Get depth charts
$depthCharts = $sdk->mlb()->players()->depthCharts();

// Get starting lineups by date
$lineups = $sdk->mlb()->players()->startingLineupsByDate('2023-07-15');
```

#### Events & Scores

```php
// Get schedules for a season
$schedules = $sdk->mlb()->events()->schedules('2023');

// Get basic schedules
$basicSchedules = $sdk->mlb()->events()->schedulesBasic('2023');

// Get scores by date (final)
$scoresFinal = $sdk->mlb()->events()->scoresByDateFinal('2023-07-15');

// Get scores by date (live & final)
$scores = $sdk->mlb()->events()->scoresByDate('2023-07-15');

// Get play by play for a game
$playByPlay = $sdk->mlb()->events()->playByPlay(12345);
```

#### Statistics

```php
// Get box score for a game (final)
$boxScore = $sdk->mlb()->stats()->boxScoreFinal(12345);

// Get box score for a game (live & final)
$boxScoreLive = $sdk->mlb()->stats()->boxScore(12345);

// Get box scores by date
$boxScores = $sdk->mlb()->stats()->boxScores('2023-07-15');

// Get player season stats
$playerStats = $sdk->mlb()->stats()->playerSeasonStats('2023');

// Get player season stats by team
$teamPlayerStats = $sdk->mlb()->stats()->playerSeasonStatsByTeam('2023', 'NYY');

// Get team season stats
$teamStats = $sdk->mlb()->stats()->teamSeasonStats('2023');

// Get player game logs
$gameLogs = $sdk->mlb()->stats()->playerGameLogs('2023', 10001365, 'all');
```

#### Betting

```php
// Get pre-game odds by date
$odds = $sdk->mlb()->betting()->preGameOddsByDate('2023-07-15');

// Get in-game odds by date
$inGameOdds = $sdk->mlb()->betting()->inGameOddsByDate('2023-07-15');

// Get betting events by date
$bettingEvents = $sdk->mlb()->betting()->bettingEventsByDate('2023-07-15');

// Get betting markets by game
$markets = $sdk->mlb()->betting()->bettingMarketsByGame(12345);

// Get betting trends by matchup
$trends = $sdk->mlb()->betting()->bettingTrendsByMatchup('NYY', 'BOS');

// Get betting splits by game
$splits = $sdk->mlb()->betting()->bettingSplitsByGame(12345);
```

#### Fantasy

```php
// Get projected player game stats by date
$projections = $sdk->mlb()->fantasy()->projectedPlayerGameStatsByDate('2023-07-15');

// Get projected player season stats with ADP
$seasonProjections = $sdk->mlb()->fantasy()->projectedPlayerSeasonStatsWithAdp('2023');

// Get DFS slates by date
$slates = $sdk->mlb()->fantasy()->dfsSlatesByDate('2023-07-15');

// Get fantasy points by date
$fantasyPoints = $sdk->mlb()->fantasy()->fantasyPointsByDate('2023-07-15');
```

#### News

```php
// Get latest news
$news = $sdk->mlb()->news()->news();

// Get news by date
$newsByDate = $sdk->mlb()->news()->newsByDate('2023-07-15');

// Get news by player
$newsByPlayer = $sdk->mlb()->news()->newsByPlayer(10000507);

// Get premium news
$premiumNews = $sdk->mlb()->news()->premiumNews();

// Get headshots
$headshots = $sdk->mlb()->news()->headshots();
```

#### Utility

```php
// Check if games are in progress
$inProgress = $sdk->mlb()->utility()->areGamesInProgress();

// Get current season
$currentSeason = $sdk->mlb()->utility()->currentSeason();

// Get betting metadata
$bettingMetadata = $sdk->mlb()->utility()->bettingMetadata();

// Get active sportsbooks
$sportsbooks = $sdk->mlb()->utility()->activeSportsbooks();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Neil Carlo Sucuangco](https://github.com/faisuc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
