<?php

namespace Composite\TecDoc\DTOs;

use Composite\TecDoc\Collections\Article\ArticleAttributeCollection;
use Composite\TecDoc\Collections\ManufacturerCollection;
use Composite\TecDoc\Models\Article\Article;
use Composite\TecDoc\Models\Article\ArticleAttribute;

class ArticleDTO
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

    /**
     * Create article model model from array
     *
     * @param  array $articleArray
     * @return Article
     */
    public function createArticleModel(array $articleArray) : Article
    {
        $article = new Article();
        $article->setArticleAttributes(
            $this->mapArticleAttributeCollection($articleArray)
        );
        return $article;
    }
        
    // /**
    //  * Map manufacturers array to ManufacturerCollection
    //  *
    //  * @param  array $data
    //  * @return ManufacturerCollection
    //  */
    // public function mapArticleCollection(array $data) : ManufacturerCollection
    // {
    //     if (isset($data["data"]) && $data["data"]) {
    //         $manufacturers = new ManufacturerCollection();
    //         foreach ($data["data"]["array"] as $manufacturer) {
    //             $manufacturers->add($this->createManufacturerModel($manufacturer));
    //         }
    //         return $manufacturers;
    //     }
    // }
}
