<?php

use Sami\Sami;

return new Sami(__DIR__ . "/../client", array(
    'title'                => 'Semux PHP SDK',
    'build_dir'            => __DIR__ . '/../docs',
    'cache_dir'            => __DIR__ . '/cache',
    'default_opened_level' => 3,
));
