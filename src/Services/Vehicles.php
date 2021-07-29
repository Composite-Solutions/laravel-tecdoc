<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Vehicles
{

    /**
     * Get vehicle ids by criteria
     * 
     * $filter = [
     *  "carType" => "P",  // default is P (passenger car)
     *  "lang" => "HU",  // default is in config file
     *  "manuId" => 5, // Required
     *  "modId" => 4955 // Required
     * ]
     * 
     * carType options:
     *  P: Passenger car
     *  O: Commercial vehicle
     *  L: Light commercial vehicle
     * 
     * @param  array $filter
     * @return array
     */
    public function ids(array $filter): array
    {
        $response = TecDoc::post('', $this->createIdsPayload($filter));
        return isset($response["data"]) && $response["data"] ? $response["data"]["array"] : $response;
    }

    /**
     * Filter vehicles by ids
     * 
     * $filter = [
     *  "lang" => "HU", // default is in config file
     *  "carIds" => [   // Required
     *      4086,
     *      33014,
     *      26582,
     *      18069
     *  ]
     * ]
     * 
     * @param  array $filter
     * @return array
     */
    public function filter(array $filter): array
    {
        $response = TecDoc::post('', $this->createPayload($filter));
        return isset($response["data"]) && $response["data"] ? $response["data"]["array"] : $response;
    }

    /**
     * Create get ids request payload for API calls
     *
     * @param  array $filter
     * @return void
     */
    private function createIdsPayload(array $filter)
    {
        return [
            "getVehicleIdsByCriteria" => [
                "countriesCarSelection" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "carType" => $filter["carType"] ?? "P",
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "manuId" => $filter["manuId"],
                "modId" => $filter["modId"]
            ]
        ];
    }
    /**
     * Create filter request payload for API calls
     *
     * @param  array $filter
     * @return void
     */
    private function createPayload(array $filter)
    {
        return [
            "getVehicleByIds3" => [
                "country" => Config::get('tecdoc.country'),
                "articleCountry" => Config::get('tecdoc.country'),
                "countriesCarSelection" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "carIds" => [
                    "array" => $filter["carIds"]
                ]
            ]
        ];
    }
}
