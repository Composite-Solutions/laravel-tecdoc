<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\OenNumber;

class OenNumberDTO
{
    /**
     * Create oen number model from array
     *
     * @param  array $oenNumberArray
     * @return OenNumber
     */
    public function createOenNumberModel(array $oenNumberArray) : OenNumber
    {
        $oenNumber = new OenNumber();
        $oenNumber->setBlockNumber($oenNumberArray['blockNumber'] ?? null);
        $oenNumber->setBrandName($oenNumberArray['brandName'] ?? null);
        $oenNumber->setOeNumber($oenNumberArray['oeNumber'] ?? null);
        $oenNumber->setSortNumber($oenNumberArray['sortNumber'] ?? null);
        return $oenNumber;
    }

    /**
     * Map oen number array to array of oen number models
     *
     * @param  array $data
     * @return array
     */
    public function mapOenNumberCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $oenNumbers = [];
            foreach ($data["data"]["array"][0]['oenNumbers']['array'] as $oenNumber) {
                array_push($oenNumbers, $this->createOenNumberModel($oenNumber));
            }
            return $oenNumbers;
        }
    }
}
