<?php

require_once(__DIR__ . "/../vendor/autoload.php");

$config = new Semux\Client\Configuration();
$config->setHost("http://localhost:5171/v2.0.0")
    ->setUsername('user')
    ->setPassword('pass');

$semuxApi = new Semux\Client\Api\SemuxApi(
    new GuzzleHttp\Client(),
    $config
);