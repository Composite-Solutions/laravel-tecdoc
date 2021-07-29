<?php

namespace Composite\TecDoc\Facades;

use Illuminate\Support\Facades\Facade;
use Composite\TecDoc\Gateway;

/**
 * @method static array get(string $uri, array $payload = [])
 * @method static array post(string $uri, array $payload = [])
 * @method static array put(string $uri, array $payload = [])
 * @method static array delete(string $uri, array $payload = [])
 * @method static Gateway gateway()
 * @method static Manufacturers manufacturers()
 * @method static ModelSeries modelSeries()
 * @method static Vehicles vehicles()
 * 
 */
class TecDoc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tecdoc';
    }
}