<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class ModelSeries
{

    /**
     * Filter ModelSeries
     * 
     * $filter = [
     *  "lang" => "HU", // default is in config file
     *  "linkingTargetType" => "P", // default is P (passenger car)
     *  "manuId" => 5 // Required 
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
        $response = TecDoc::post('',$this->createPayload($filter));
        return isset($response["data"]) && $response["data"] ? $response["data"]["array"] : [];
    }
    
    /**
     * Create request payload for API calls
     *
     * @param  array $filter
     * @return void
     */
    private function createPayload(array $filter)
    {
        return [
            "getModelSeries" => [
                "country" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linkingTargetType" => $linkingTargetType ?? "P",
                "manuId" => $filter["manuId"]
            ]
        ];
    }
}
