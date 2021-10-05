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
     * ];
     * $recursive = true;
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
    public function filter(int $linkingTargetId, string $linkingTargetType = null, array $filter = null, bool $recursive = false)
    {
        $response = TecDoc::post('', $this->createGetChildNodesAllLinkingTarget2Payload($linkingTargetId, $linkingTargetType, $filter));
        if ($recursive) {
            return $this->makeNested((new AssemblyGroupDTO())->mapAssemblyGroupCollection($response));
        } else {
            return (new AssemblyGroupDTO())->mapAssemblyGroupCollection($response);
        }
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

    function makeNested($source)
    {
        $nested = array();
        foreach ($source as &$s) {
            if (is_null($s->parentNodeId)) {
                $nested[] = &$s;
            } else {
                $pid = $s->parentNodeId;
                if ($source[array_search($pid, array_column($source, 'assemblyGroupNodeId'))]) {
                    if (
                        !isset(
                            $source[array_search(
                                    $pid,
                                    array_column($source, 'assemblyGroupNodeId')
                                )]->children
                        )
                    ) {
                        $source[array_search($pid, array_column($source, 'assemblyGroupNodeId'))]->children = array();
                    }
                    $source[array_search($pid, array_column($source, 'assemblyGroupNodeId'))]->children[] = &$s;
                }
            }
        }
        return $nested;
    }
}
