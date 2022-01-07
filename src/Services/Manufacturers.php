<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Collections\ManufacturerCollection;
use Composite\TecDoc\DTOs\Manufacturer\ManufacturerDTO;
use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Manufacturers
{
    /**
     * Filter manufacturers by
     * linking targer types.
     * 
     * $filter = [
     *  "lang" => "HU" // default is in config
     *  "linkingTargetType" => "P" // default is P (passenger car)
     * ]
     *
     * linkingTargetType options:
     *  P: Passenger car
     *  O: Commercial vehicle
     *  A: Axles
     *  M: Motor
     * 
     * @param  array $filter
     * @return array
     */
    public function all(array $filter = null): array
    {
        $response = TecDoc::post('', $this->createPayload($filter));
        return (new ManufacturerDTO())->mapManufacturerCollection($response);
    }

    /**
     * Create request payload for API calls
     *
     * @param  array $filter
     * @return array
     */
    private function createPayload(array $filter = null): array
    {
        return [
            "getManufacturers2" => [
                "country" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linkingTargetType" => $filter["linkingTargetType"] ?? "POM",
                "favouredList" => $filter["favouredList"] ?? null,
            ]
        ];
    }
}
