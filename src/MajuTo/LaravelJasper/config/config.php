<?php

return [
    'default' => 'jasper',

    'jasper' => [
        "host" => env('JASPER_HOST', "localhost"),
        "username" => env('JASPER_USERNAME', "username"),
        "password" => env('JASPER_PASSWORD', "password"),
        "organisationId" => env('JASPER_ORG_ID', null),
    ]
];