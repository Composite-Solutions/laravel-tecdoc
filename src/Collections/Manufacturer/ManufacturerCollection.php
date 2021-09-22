<?php

namespace Composite\TecDoc\Collections\Manufacturer;

use Composite\TecDoc\Models\Manufacturer\Manufacturer;

class ManufacturerCollection
{
    /**
     * Manufacturer array
     *
     * @var array
     */
    private array $_manufacturers;
    
    /**
     * Init manufacturers empty array
     *
     * @return void
     */
    public function __construct()
    {
        $this->_manufacturers = [];
    }
    
    /**
     * Add manufacturer object to manufacturers array
     *
     * @param  mixed $manufacturer
     * @return void
     */
    public function add(Manufacturer $manufacturer) : void
    {
        array_push($this->_manufacturers, $manufacturer);
    }    
    
    /**
     * return manufacturers private variable as an array
     *
     * @return array
     */
    public function toArray() : array
    {
        return $this->_manufacturers;
    }
}
