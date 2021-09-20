<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\ArticleAttribute;

class ArticleAttributeDTO
{
    /**
     * Create article attribute model from array
     *
     * @param  array $articleAttributeArray
     * @return ArticleAttribute
     */
    public function createArticleAttributeModel(array $articleAttributeArray): ArticleAttribute
    {
        $articleAttribute = new ArticleAttribute();
        $articleAttribute->setAttrBlockNo($articleAttributeArray['attrBlockNo'] ?? null);
        $articleAttribute->setAttrId($articleAttributeArray['attrId'] ?? null);
        $articleAttribute->setAttrIsConditional($articleAttributeArray['attrIsConditional'] ?? null);
        $articleAttribute->setAttrIsInterval($articleAttributeArray['attrIsInterval'] ?? null);
        $articleAttribute->setAttrIsLinked($articleAttributeArray['attrIsLinked'] ?? null);
        $articleAttribute->setAttrName($articleAttributeArray['attrName'] ?? null);
        $articleAttribute->setAttrShortName($articleAttributeArray['attrShortName'] ?? null);
        $articleAttribute->setAttrType($articleAttributeArray['attrType'] ?? null);
        $articleAttribute->setAttrUnit($articleAttributeArray['attrUnit'] ?? null);
        $articleAttribute->setAttrValue($articleAttributeArray['attrValue'] ?? null);
        $articleAttribute->setAttrValueId($articleAttributeArray['attrValueId'] ?? null);
        return $articleAttribute;
    }

    /**
     * Map article attributes array to array of article attribute models
     *
     * @param  array $data
     * @return array
     */
    public function mapArticleAttributeCollection(array $data): array
    {
        if (isset($data["data"]) && $data["data"]) {
            $articleAttributes = [];
            if (isset($data["data"]["array"][0]['articleAttributes']) && $data["data"]["array"][0]['articleAttributes']) {
                foreach ($data["data"]["array"][0]['articleAttributes']['array'] as $articleAttribute) {
                    array_push($articleAttributes, $this->createArticleAttributeModel($articleAttribute));
                }
            }
            return $articleAttributes;
        }
    }
}
