<?php

namespace Composite\TecDoc\Services;

use Composite\TecDoc\Facades\TecDoc;
use Illuminate\Support\Facades\Config;

class Articles
{

    /**
     * Get article ids with state
     *
     * $filter = [
     *  "lang" => "HU",  // default is in config file
     *  "linkingTargetId" => 26582, // Required (carId / motor id)
     *  "linkingTargetType" => "P",  // default is P (passenger car)
     *  "sort" => 1 // 1: by brand name, 2: by generic article name
     *  "barandNo" => [
     *      5,
     *      347,
     *      432
     *  ]
     * ]
     *
     * linkingTargetType options:
     *  P: Passenger car
     *  O: Commercial vehicle
     *  L: Light commercial vehicle
     *  M: Motor
     *  A: Axles
     *  K: Body type
     *  U: Universal
     *
     * sort options:
     *  1: Sort by brand name
     *  2: Sort by generic article name
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
     * Find article by articleId, and filter results
     * if needed
     *
     * $articleId = 599605873; // Required
     * $filter = [ // Optional
     *  'lang' => 'HU',
     *  'attributs' => true,
     *  'basicData' => true,
     *  'documents' => true,
     *  'eanNumbers' => true,
     *  'immediateAttributs' => true,
     *  'immediateInfo' => true,
     *  'info' => true,
     *  'mainArticles' => true,
     *  'normalAustauschPrice' => false,
     *  'oeNumbers' => true,
     *  'prices' => true,
     *  'replacedByNumbers' => true,
     *  'replacedNumbers' => true,
     *  'thumbnails' => true,
     *  'usageNumbers' => true,
     * ]
     *
     * @param  int $articleId
     * @param  array $filter
     * @return array
     */
    public function find(int $articleId, array $filter = null): array
    {
        $response = TecDoc::post('', $this->createFindPayload($articleId, $filter));
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
            "getArticleIdsWithState" => [
                "articleCountry" => Config::get('tecdoc.country'),
                "provider" => Config::get('tecdoc.provider_id'),
                "lang" => $filter["lang"] ?? Config::get('tecdoc.lang'),
                "linkingTargetId" => $filter["linkingTargetId"],
                "linkingTargetType" => $filter["linkingTargetType"] ?? "P",
                "sort" => $filter["sort"],
                "brandNo" => [
                    "array" => $filter["brandNo"]
                ]
            ]
        ];
    }

    public function createFindPayload(int $articleId, array $filter = null)
    {
        return [
            'getDirectArticlesByIds6' => [
                'articleCountry' => Config::get('tecdoc.country'),
                'provider' => Config::get('tecdoc.provider_id'),
                'articleId' => [
                    'array' => [
                        $articleId,
                    ],
                ],
                'lang' => $filter["lang"] ?? Config::get('tecdoc.lang'),
                'attributs' => $filter != null && isset($filter['attributs']) ? $filter['attributs'] : true,
                'basicData' => $filter != null && isset($filter['basicData']) ? $filter['basicData'] : true,
                'documents' => $filter != null && isset($filter['documents']) ? $filter['documents'] : true,
                'eanNumbers' => $filter != null && isset($filter['eanNumbers']) ? $filter['eanNumbers'] : true,
                'immediateAttributs' => $filter != null && isset($filter['immediateAttributs']) ? $filter['immediateAttributs'] : true,
                'immediateInfo' => $filter != null && isset($filter['immediateInfo']) ? $filter['immediateInfo'] : true,
                'info' => $filter != null && isset($filter['info']) ? $filter['info'] : true,
                'mainArticles' => $filter != null && isset($filter['mainArticles']) ? $filter['mainArticles'] : true,
                'normalAustauschPrice' => $filter != null && isset($filter['normalAustauschPrice']) ? $filter['normalAustauschPrice'] : false,
                'oeNumbers' => $filter != null && isset($filter['oeNumbers']) ? $filter['oeNumbers'] : true,
                'prices' => $filter != null && isset($filter['prices']) ? $filter['prices'] : true,
                'replacedByNumbers' => $filter != null && isset($filter['replacedByNumbers']) ? $filter['replacedByNumbers'] : true,
                'replacedNumbers' => $filter != null && isset($filter['replacedNumbers']) ? $filter['replacedNumbers'] : true,
                'thumbnails' => $filter != null && isset($filter['thumbnails']) ? $filter['thumbnails'] : true,
                'usageNumbers' => $filter != null && isset($filter['usageNumbers']) ? $filter['usageNumbers'] : true,
            ],
        ];
    }
}
