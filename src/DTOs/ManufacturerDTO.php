<?php

namespace Composite\TecDoc\DTOs;

use Composite\TecDoc\Collections\ManufacturerCollection;
use Composite\TecDoc\Models\Manufacturer;

class ManufacturerDTO
{    

    /**
     * Create manufacturer model from array
     *
     * @param  array $manufacturerArray
     * @return Manufacturer
     */
    private function createManufacturerModel(array $manufacturerArray) : Manufacturer
    {
        $manufacturer = new Manufacturer();
        $manufacturer->setManuName($manufacturerArray['manuName']);
        $manufacturer->setManuID($manufacturerArray['manuId']);
        return $manufacturer;
    }
        
    /**
     * Map manufacturers array to ManufacturerCollection
     *
     * @param  array $data
     * @return ManufacturerCollection
     */
    public function mapManufacturerCollection(array $data) : ManufacturerCollection
    {
        if (isset($data["data"]) && $data["data"]) {
            $manufacturers = new ManufacturerCollection();
            foreach ($data["data"]["array"] as $manufacturer) {
                $manufacturers->add($this->createManufacturerModel($manufacturer));
            }
            return $manufacturers;
        }
    }
}
