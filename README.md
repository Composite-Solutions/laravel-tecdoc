# TecDoc API wrapper for laravel

[![Software License][shield-license]](LICENSE)

# Status: Under construction

## Roadmap
- [x] Implement environment
- [ ] Add further docs

## Dependencies

- [PHP](https://secure.php.net): ^7.1
- [illuminate/support](https://github.com/illuminate/support): ^5.0

## Install

You can install the package by adding the following lines to composer.json. The repository’s property lists all non-packagist repositories.
```php
...
"require": {
    "php": "^7.1.3",
    "fideloper/proxy": "^4.0",
    "laravel/framework": "5.7.*",
    "laravel/tinker": "^1.0",
    "composite/laravel-tecdoc": "^1.0.0"
},
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Composite-Solutions/laravel-tecdoc.git"
    }
]
...
```

After updateing the composer.json file, you can install the package from the repository with:
```bash
$ composer update
```

In Laravel 5.5 or above the service provider will automatically get registered. In older versions of the framework just add the service provider in `config/app.php` file:
```php
'providers' => [
    ...
    /*
     * Package Service Providers...
     */
    Composite\TecDoc\TecDocServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'TecDoc' => Composite\TecDoc\Facades\TecDoc::class,
    ...
],
```

You can publish the config file with:
```bash
$ php artisan vendor:publish --provider="Composite\TecDoc\TecDocServiceProvider" --tag=config
```

When published, [the `config/tecdoc.php` config](config/tecdoc.php) file contains:

```php
<?php

return [
    'service_url' => env('TEC_DOC_SERVICE_URL', "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint"),
    'api_key' => env('TECDOC_API_KEY'),
    'provider_id' => env('TECDOC_PROVIDER_ID'),
    'country' => 'HU',
    'lang' => 'HU',
];
```
    
## Usage

- Manufacturers, [check out the manufacturers.md](docs/manufacturers.md)


```php
\TecDoc::get(string $uri, array $payload = []);

\TecDoc::post(string $uri, array $payload = []);

\TecDoc::put(string $uri, array $payload = []);

\TecDoc::delete(string $uri, array $payload = []);

\TecDoc::manufacturers()->all();

\TecDoc::manufacturers()->filter(string $linkingTargetType);
```
    
## Testing

``` bash
$ composer lint
```

## Contributing

### Security Vulnerabilities

If you discover any security-related issues, please email [btamba@composite.hu](mailto:btamba@composite.hu) instead of using the issue tracker. All security vulnerabilities will be promptly addressed.

## Licence

The Laravel Nebih package is open-source software licensed under the [MIT license](LICENSE).
