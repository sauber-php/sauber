<a href="https://supportukrainenow.org/"><img src="https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct.svg" width="100%"></a>

# Sauber API Template

<!-- BADGES_START -->
![GitHub release (latest by date)](https://img.shields.io/github/v/release/sauber-php/sauber)
![Tests](https://github.com/sauber-php/sauber/workflows/tests/badge.svg)
![Static Analysis](https://github.com/sauber-php/sauber/workflows/static/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/sauber-php/sauber.svg?style=flat-square)](https://packagist.org/packages/phpfox/container)
![GitHub](https://img.shields.io/github/license/sauber-php/sauber)
<!-- BADGES_END -->

This is the repository for the API Template for the Sauber PHP Framework.

## Installation

To get started with this template, please use composer:

```bash
composer create-project sauber-php/sauber your-api
```

## Usage

To get started with this template, open up `public/index.php` and inspect how we are adding routes,
you can load these in here - or move them to a dedicated routes file:

```php
use Sauber\Framework\Application;

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';

$app = Application::boot(
    container: $container,
);

$app->get(
    path: '/',
    handler: App\Http\Handlers\RootHandler::class,
)->setName('root');

$app->run();
```

Handlers are either `Closures` or `Invokable Classes` so make sure you bear this in mind as you extend
and add your own routes.

## Testing

To run the tests:

```bash
./vendor/bin/pest
```

## Static Analysis

To check the static analysis:

```bash
./vendor/bin/phpstan analyse
```

## Changelog

Please see [the Changelog](CHANGELOG.md) for more information on what has changed recently.

