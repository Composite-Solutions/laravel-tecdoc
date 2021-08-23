<?php

namespace Composite\TecDoc\Collections;

use Composite\TecDoc\Models\Manufacturer;

class ManufacturerCollection
{
    private array $_manufacturers = [];
    public function add(Manufacturer $manufacturer)
    {
        array_push($this->_manufacturers, $manufacturer);
    }
    public function toArray() : array
    {
        return $this->_manufacturers;
    }
}
