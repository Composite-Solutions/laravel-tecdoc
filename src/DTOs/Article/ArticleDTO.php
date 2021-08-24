<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\Article;
use Composite\TecDoc\Models\Article\ArticleAttribute;

class ArticleDTO
{        

    /**
     * Create article model model from array
     *
     * @param  array $articleArray
     * @return Article
     */
    public function createArticleModel(array $articleArray) : Article
    {
        $article = new Article();
        $article->setArticleAttributes((new ArticleAttributeDTO())->mapArticleAttributeCollection($articleArray));
        $article->setArticleDocuments((new ArticleDocumentDTO())->mapArticleDocumentCollection($articleArray));
        $article->setArticleInfo((new ArticleInfoDTO())->mapArticleInfoCollection($articleArray));
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
