<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
    'client_id' => '18a542cf1bf7cd6d8a3f',
    'client_secret' => 'c785d88cfe834a3843f73a176094b67f3f0d05a5',
    'redirect' => 'http://localhost:8000/login/github/callback',

    // 'client_id' => env('GITHUB_CLIENT_ID'),
    // 'client_secret' => env('GITHUB_CLIENT_SECRET'),
    // 'redirect' => 'http://your-callback-url',
    ],

    'google' => [
    'client_id'     => '228362425734-pa22eu98nqiqnd0v4bj77botnl983tji.apps.googleusercontent.com',
    'client_secret' => '1EaLQw4zjyGu90JEm52lefbn',
    'redirect'      => 'http://localhost:8000/login/google/callback',
    ],
];
