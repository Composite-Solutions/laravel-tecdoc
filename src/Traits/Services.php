<?php

namespace Composite\TecDoc\Traits;

use Composite\TecDoc\Services\Addresses;
use Composite\TecDoc\Services\Articles;
use Composite\TecDoc\Services\Manufacturers;
use Composite\TecDoc\Services\ModelSeries;
use Composite\TecDoc\Services\Vehicles;

trait Services
{
    /**
     * @return \Composite\TecDoc\Services\Manufacturers
     */
    public function manufacturers(): Manufacturers
    {
        return new Manufacturers;
    }
        
    /**
     * @return ModelSeries
     */
    public function modelSeries(): ModelSeries
    {
        return new ModelSeries;
    }

    /**
     * @return Vehicles
     */
    public function vehicles(): Vehicles
    {
        return new Vehicles;
    }

    /**
     * @return Articles
     */
    public function articles(): Articles
    {
        return new Articles;
    }

    /**
     * @return Addresses
     */
    public function addresses(): Addresses
    {
        return new Addresses;
    }
}