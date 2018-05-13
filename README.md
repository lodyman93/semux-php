# Semux PHP SDK

[![Latest Stable Version](https://img.shields.io/packagist/v/semuxproject/semux-php-sdk.svg)](https://packagist.org/packages/semuxproject/semux-php-sdk)
[![Build Status](https://travis-ci.org/semuxproject/semux-php-sdk.svg?branch=master)](https://travis-ci.org/semuxproject/semux-php-sdk)

Semux PHP SDK aims to provide necessary utilities for web developers to create 3rd party web services connecting to [Semux Wallet](https://github.com/semuxproject/semux). Currently the only supported feature is an API client.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Getting Started](#getting-started)
- [Documentation](#documentation)
- [Examples](#examples)
- [Tests](#tests)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

PHP 5.6 and later

## Installation

To install the SDK via [Composer](http://getcomposer.org/), run:

```
composer require semuxproject/semux-php-sdk
```

## Getting Started

Please follow the [installation procedure](#installation) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure base URL and HTTP basic authorization of Semux API Server
$config = new Semux\Client\Configuration();
$config->setHost("http://localhost:5171/v2.0.0")
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$semuxApi = new Semux\Client\Api\SemuxApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $semuxApi->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getInfo(): ', $e->getMessage(), PHP_EOL;
}
```

## Documentation

https://semuxproject.github.io/semux-php-sdk/Semux/Client/Api/SemuxApi.html

## Examples

- [Create wallets](./examples/create-wallets.php)
- [Transfer coins](./examples/transfer-coins.php)

## Tests

To run the unit tests:

```
docker-compose -f .travis/docker-compose.yml up -d && .travis/wait-for-it.sh -h 0.0.0.0 -p 5171 -t 30 -s
composer install
cp phpunit.xml.dist phpunit.xml
./vendor/bin/phpunit
```

## Maintainers

[@cryptokat](https://github.com/cryptokat).

## License

[MIT](LICENSE) © [Semux Foundation](https://github.com/semuxproject)