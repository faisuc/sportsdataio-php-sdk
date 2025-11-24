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
