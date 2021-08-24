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
    public function createArticleAttributeModel(array $articleAttributeArray) : ArticleAttribute
    {
        $articleAttribute = new ArticleAttribute();
        $articleAttribute->setAttrBlockNo($articleAttributeArray['attrBlockNo']);
        return $articleAttribute;
    }

    /**
     * Map article attributes array to array of article attribute models
     *
     * @param  array $data
     * @return array
     */
    public function mapArticleAttributeCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $articleAttributes = [];
            foreach ($data["data"]["array"][0]['articleAttributes']['array'] as $articleAttribute) {
                array_push($articleAttributes, $this->createArticleAttributeModel($articleAttribute));
            }
            return $articleAttributes;
        }
    }
}
