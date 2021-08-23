<?php

namespace Composite\TecDoc\DTOs;

use Composite\TecDoc\Collections\ManufacturerCollection;
use Composite\TecDoc\Models\Manufacturer;

class ManufacturerDTO
{
    private function createManufacturerModel(array $manufacturerArray) : Manufacturer
    {
        $manufacturer = new Manufacturer();
        $manufacturer->setManuName($manufacturerArray['manuName']);
        $manufacturer->setManuID($manufacturerArray['manuId']);
        return $manufacturer;
    }
    public function mapManufacturerCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $manufacturers = new ManufacturerCollection();
            foreach ($data["data"]["array"] as $manufacturer) {
                $manufacturers->add($this->createManufacturerModel($manufacturer));
            }
            return $manufacturers->toArray();
        }
    }
}
