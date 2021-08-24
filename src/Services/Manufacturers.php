<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Collections\ManufacturerCollection;
use Composite\TecDoc\DTOs\ManufacturerDTO;
use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Manufacturers
{
    /**
     * Get all passenger car manufacturers
     *
     * @return ManufacturerCollection
     */
    public function all(): array
    {
        $response = TecDoc::post('', $this->createPayload());
        return (new ManufacturerDTO())->mapManufacturerCollection($response)->toArray();
    }

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
    public function filter(array $filter): array
    {
        $response = TecDoc::post('', $this->createPayload($filter));
        return (new ManufacturerDTO())->mapManufacturerCollection($response)->toArray();
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
            "getManufacturers" => [
                "country" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linkingTargetType" => $filter["linkingTargetType"] ?? "P",
            ]
        ];
    }
}
