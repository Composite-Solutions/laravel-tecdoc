<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\DTOs\AssemblyGroup\AssemblyGroupDTO;
use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class AssemblyGroups
{
    /**
     * Find article by any number
     *
     * $linkingTargetId = '12798'; // Required, can be motorId, carId
     * $linkingTargetType = "P"; 
     * $filter = [ // optional
     *  'lang' => 'HU,
     *  'childNodes' => true,
     *  'linked' => true,
     * ]
     * 
     * linkingTargetType options:
     *  P: Passenger car,
     *  O: Commercial vehicle,
     *  M: Motor,
     *  A: Axles,
     *  K: Body type,
     *  U: Universal
     * 
     * @param  mixed $articleNumber
     * @param  mixed $filter
     * @return void
     */
    public function filter(int $linkingTargetId, string $linkingTargetType = null, array $filter = null)
    {
        $response = TecDoc::post('', $this->createGetChildNodesAllLinkingTarget2Payload($linkingTargetId, $linkingTargetType, $filter));
        return (new AssemblyGroupDTO())->mapAssemblyGroupCollection($response);
    }

    public function createGetChildNodesAllLinkingTarget2Payload(int $linkingTargetId, string $linkingTargetType = null, array $filter = null)
    {
        return [
            "getChildNodesAllLinkingTarget2" => [
                'articleCountry' => Config::get('tecdoc.country'),
                "childNodes" => $filter["childNodes"] ?? true,
                'lang' => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linked" => $filter["linked"] ?? true,
                "linkingTargetType" => $linkingTargetType ?? "P",
                "linkingTargetId" => $linkingTargetId, // carid, motorId
                "provider" => env('TECDOC_PROVIDER_ID')
            ]
        ];
    }
}
