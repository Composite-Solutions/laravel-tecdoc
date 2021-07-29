<?php

namespace Composite\TecDoc\Traits;

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
}