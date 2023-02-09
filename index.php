<?php

$countries = [
    'france' => [
        'capital_name' => 'paris',
        'flag_file' => 'france.png',
    ],
    'belgium' => [
        'capital_name' => 'brussels',
        'flag_file' => 'belgium-flag-icon-256.png',
    ],
    'germany' => [
        'capital_name' => 'berlin',
        'flag_file' => 'germany-flag-icon-256.png',
    ],
    'south-africa' => [
        'capital_name' => 'pretoria',
        'flag_file' => 'south-africa-flag-icon-256.png',
    ],
];

$country_names = array_keys($countries);


require 'index.view.php';
