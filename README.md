# Semux PHP SDK

[![Build Status](https://travis-ci.org/semuxproject/semux-php-sdk.svg?branch=master)](https://travis-ci.org/semuxproject/semux-php-sdk)

Semux is an experimental high-performance blockchain platform that powers decentralized application.

For more information, please visit [https://www.semux.org](https://www.semux.org)

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), run:

```
composer require semuxproject/semux-php-sdk
```

## Tests

To run the unit tests:

```
composer install
cp phpunit.xml.dist phpunit.xml
./vendor/bin/phpunit
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