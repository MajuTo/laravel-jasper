# laravel-jasper
This package lets you use the Zend LDAP library in Laravel

## Installation

##### Package
```bash
composer require majuto/laravel-jasper
```

##### Config
```bash
php artisan vendor:publish
```

```bash
return [
    'default' => 'jasper',

    'jasper' => [
        "host" => env('JASPER_HOST', "jasper.local"),
        "username" => env('JASPER_USERNAME', "username"),
        "password" => env('JASPER_PASSWORD', "password"),
        "organisationId" => env('JASPER_ORG_ID', null),
    ]
];
```

If you need to manage multiple jasper servers, you can add new config keys : 

```bash
return [
    'default' => 'jasper',

    'prod' => [
        "host" => env('JASPER_HOST', "jasper.local"),
        "username" => env('JASPER_USERNAME', "username"),
        "password" => env('JASPER_PASSWORD', "password"),
        "organisationId" => env('JASPER_ORG_ID', null),
    ],
    'test' => [
        "host" => env('JASPER_HOST', "jasper-test.local"),
        "username" => env('JASPER_USERNAME', "username"),
        "password" => env('JASPER_PASSWORD', "password"),
        "organisationId" => env('JASPER_ORG_ID', null),
    ]
];
```

## Usage
Once installed, you have access to the jasper() helper which returns an instance of Jasper class, extending the original Client class.
You have access to all of the original methods and some that have been added to simplify some uses, especially for users management.

- `jasper()`: Returns the Jasper object with the "default" configuration ("prod" in example).
- `jasper('test')`: Returns the Jasper object with the "test" configuration.
- `jasper()->searchUsers($query)`: Returns an array with all users matching $query (all if $query is an empty string).
- `jasper()->getUser($username)`: Returns the User with username = $username.
- `jasper()->addOrUpdateUser($user)`: Add or update the User $user.