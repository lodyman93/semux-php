# Semux PHP SDK

[![Latest Stable Version](https://img.shields.io/packagist/v/semuxproject/semux-php-sdk.svg)](https://packagist.org/packages/semuxproject/semux-php-sdk)
[![Build Status](https://travis-ci.org/semuxproject/semux-php-sdk.svg?branch=master)](https://travis-ci.org/semuxproject/semux-php-sdk)

Semux is an experimental high-performance blockchain platform that powers decentralized application.

For more information, please visit [https://www.semux.org](https://www.semux.org)

## Requirements

PHP 5.6 and later

## Installation

To install the SDK via [Composer](http://getcomposer.org/), run:

```
composer require semuxproject/semux-php-sdk
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure base URL and HTTP basic authorization of Semux API Server
$config = new Semux\Client\Configuration();
$config->setHost("http://localhost:5171/v2.0.0")
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new Semux\Client\Api\SemuxApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemuxApi->getInfo(): ', $e->getMessage(), PHP_EOL;
}
```

## Documentation

https://semuxproject.github.io/semux-php-sdk/Semux/Client/Api/SemuxApi.html

## Tests

To run the unit tests:

```
docker-compose -f .travis/docker-compose.yml up -d && .travis/wait-for-it.sh -h 0.0.0.0 -p 5171 -t 30 -s
composer install
cp phpunit.xml.dist phpunit.xml
./vendor/bin/phpunit
```
