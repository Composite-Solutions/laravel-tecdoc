<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\DTOs\ModelSeries\ModelSeriesDTO;
use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class ModelSeries
{

    /**
     * Filter ModelSeries
     * 
     * $manuId = 5;
     * $filter = [ // optional
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
    public function findByNumber(int $manuId, array $filter = null): array
    {
        $response = TecDoc::post('',$this->createPayload($manuId, $filter));
        return (new ModelSeriesDTO())->mapModelSeriesCollection($response);
    }
    
    /**
     * Create request payload for API calls
     *
     * @param  array $filter
     * @return void
     */
    private function createPayload(int $manuId, array $filter = null)
    {
        return [
            "getModelSeries" => [
                "country" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linkingTargetType" => $filter["linkingTargetType"] ?? "P",
                "manuId" => $manuId,
            ]
        ];
    }
}
