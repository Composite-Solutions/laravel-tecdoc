<?php

namespace Composite\TecDoc\Traits;

use Composite\TecDoc\Services\Manufacturers;

trait Services
{
    /**
     * @return \Composite\TecDoc\Services\Manufacturers
     */
    public function manufacturers(): Manufacturers
    {
        return new Manufacturers;
    }
}