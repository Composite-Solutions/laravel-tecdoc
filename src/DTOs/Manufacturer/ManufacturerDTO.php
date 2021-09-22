<?php

namespace Composite\TecDoc\DTOs\Manufacturer;

use Composite\TecDoc\Models\Manufacturer\Manufacturer;

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
     * @return array
     */
    public function mapManufacturerCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $manufacturers = [];
            foreach ($data["data"]["array"] as $manufacturer) {
                array_push($manufacturers, $this->createManufacturerModel($manufacturer));
            }
            return $manufacturers;
        }
    }
}
