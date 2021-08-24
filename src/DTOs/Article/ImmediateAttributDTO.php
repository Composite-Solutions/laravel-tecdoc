<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\ImmediateAttribut;

class ImmediateAttributDTO
{
    /**
     * Create immediate attribut model from array
     *
     * @param  array $eanNumberArray
     * @return ImmediateAttribut
     */
    public function createImmediateAttributModel(array $immediateAttributArray) : ImmediateAttribut
    {
        $immediateAttribut = new ImmediateAttribut();
        $immediateAttribut->setAttrBlockNo($immediateAttributArray['attrBlockNo'] ?? null);
        $immediateAttribut->setAttrId($immediateAttributArray['attrId'] ?? null);
        $immediateAttribut->setAttrIsConditional($immediateAttributArray['attrIsConditional'] ?? null);
        $immediateAttribut->setAttrIsInterval($immediateAttributArray['attrIsInterval'] ?? null);
        $immediateAttribut->setAttrIsLinked($immediateAttributArray['attrIsLinked'] ?? null);
        $immediateAttribut->setAttrName($immediateAttributArray['attrName'] ?? null);
        $immediateAttribut->setAttrShortName($immediateAttributArray['attrShortName'] ?? null);
        $immediateAttribut->setAttrType($immediateAttributArray['attrType'] ?? null);
        $immediateAttribut->setAttrUnit($immediateAttributArray['attrUnit'] ?? null);
        $immediateAttribut->setAttrValue($immediateAttributArray['attrValue'] ?? null);
        $immediateAttribut->setAttrValueId($immediateAttributArray['attrValueId'] ?? null);
        return $immediateAttribut;
    }

    /**
     * Map ean Immediate Attribut array  to array of ImmediateAttribut models
     *
     * @param  array $data
     * @return array
     */
    public function mapImmediateAttributCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $immediateAttributs = [];
            foreach ($data["data"]["array"][0]['immediateAttributs']['array'] as $immediateAttribut) {
                array_push($immediateAttributs, $this->createImmediateAttributModel($immediateAttribut));
            }
            return $immediateAttributs;
        }
    }
}
