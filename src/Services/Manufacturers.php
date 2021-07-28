<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Manufacturers
{
    /**
     * Get all passenger car manufacturers
     *
     * @return array
     */
    public function all(): array
    {
        return TecDoc::post('', $this->createPayload());
    }

    /**
     * Filter manufacturers by
     * linking targer types.
     * 
     * Options:
     *  P: Passenger car
     *  O: Commercial vehicle
     *  A: Axles
     *  M: Motor
     *
     * @param  mixed $linkingTargetType
     * @return array
     */
    public function query(string $linkingTargetType): array
    {
        return TecDoc::post('',$this->createPayload($linkingTargetType));
    }
    
    /**
     * createPayload
     *
     * @param  mixed $linkingTargetType
     * @return void
     */
    private function createPayload(string $linkingTargetType = null)
    {
        return [
            "getManufacturers" => [
                "country" => Config::get('tecdoc.country'),
                "lang" => Config::get('tecdoc.lang'),
                "provider" => Config::get('tecdoc.provider_id'),
                "linkingTargetType" => $linkingTargetType ?? "P",
            ]
        ];
    }
}
