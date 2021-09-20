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

You can install the package via [Composer](https://getcomposer.org/)
```bash
composer require composite/laravel-tecdoc
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
php artisan vendor:publish --provider="Composite\TecDoc\TecDocServiceProvider" --tag=config
```

When published, [the `config/tecdoc.php` config](config/tecdoc.php) file contains:

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | TecDoc service url
    |--------------------------------------------------------------------------
    |
    | The service url of TecDoc REST API
    |
    */

    'service_url' => env('TEC_DOC_SERVICE_URL', "https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint"),
    
    /*
    |--------------------------------------------------------------------------
    | API key
    |--------------------------------------------------------------------------
    |
    | The user's API key for TecDoc REST API service
    |
    */

    'api_key' => env('TECDOC_API_KEY'),
    
    /*
    |--------------------------------------------------------------------------
    | Provider ID
    |--------------------------------------------------------------------------
    |
    | The user's provider ID for TecDoc REST API service
    |
    */
    
    'provider_id' => env('TECDOC_PROVIDER_ID'),
    
    /*
    |--------------------------------------------------------------------------
    | Country code (ISO 3166)
    |--------------------------------------------------------------------------
    |
    | The user's registered country code (Country code according to ISO 3166)
    |
    */
    
    'country' => 'HU',
    
    /*
    |--------------------------------------------------------------------------
    | Language code (ISO 639)
    |--------------------------------------------------------------------------
    |
    | Chosen language code for response (Language code according to ISO 639)
    |
    */
    
    'lang' => 'HU',
     
];
```
    
## Usage

- Manufacturers, [check out the manufacturers.md](docs/manufacturers.md)
- Model series, [check out the modelSeries.md](docs/modelSeries.md)
- Vehicles, [check out the vehicles.md](docs/vehicles.md)
- Articles, [check out the articles.md](docs/articles.md)


```php
TecDoc::get(string $uri, array $payload = []);

TecDoc::post(string $uri, array $payload = []);

TecDoc::put(string $uri, array $payload = []);

TecDoc::delete(string $uri, array $payload = []);

TecDoc::manufacturers()->all();

TecDoc::manufacturers()->filter(array $filter);

TecDoc::modelSeries()->filter(array $filter);

TecDoc::vehicles()->ids(array $filter);

TecDoc::vehicles()->filter(array $filter);

TecDoc::articles()->ids(array $filter);

TecDoc::articles()->find(int $articleId, array $filter = null);

TecDoc::articles()->findByNumber(int $articleNumber, array $filter = null);
```
    
## Testing

``` bash
composer lint
```

## Contributing

### Security Vulnerabilities

If you discover any security-related issues, please email [btamba@composite.hu](mailto:btamba@composite.hu) instead of using the issue tracker. All security vulnerabilities will be promptly addressed.

## Licence

The Laravel TecDoc package is open-source software licensed under the [MIT license](LICENSE).
