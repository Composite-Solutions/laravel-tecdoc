<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\EanNumber;

class EanNumberDTO
{
    /**
     * Create ean number model from array
     *
     * @param  array $eanNumberArray
     * @return EanNumber
     */
    public function createEanNumberModel(array $eanNumberArray) : EanNumber
    {
        $eanNumber = new EanNumber();
        $eanNumber->setEanNumber($eanNumberArray['eanNumber'] ?? null);
        return $eanNumber;
    }

    /**
     * Map ean number array to array of ean number models
     *
     * @param  array $data
     * @return array
     */
    public function mapEanNumberCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $eanNumbers = [];
            foreach ($data["data"]["array"][0]['eanNumber']['array'] as $eanNumber) {
                array_push($eanNumbers, $this->createEanNumberModel($eanNumber));
            }
            return $eanNumbers;
        }
    }
}
