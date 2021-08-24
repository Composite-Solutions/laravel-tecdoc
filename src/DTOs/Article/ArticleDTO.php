<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\Article;

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
        // TODO articlePrices implementation, DTO and others
        $article->setArticleThumbnails((new ArticleThumbnailDTO())->mapArticleThumbnailCollection($articleArray));
        $article->setDirectArticle((new DirectArticleDTO())->createDirectArticleModel($articleArray));
        $article->setEanNumber((new EanNumberDTO())->mapEanNumberCollection($articleArray));
        $article->setImmediateAttributs((new ImmediateAttributDTO())->mapImmediateAttributCollection($articleArray));
        // TODO immediateInfo implementation, DTO and others
        // TODO mainArticle implementation, DTO and others
        $article->setOenNumbers((new OenNumberDto())->mapOenNumberCollection($articleArray));
        // TODO replacedByNumber implementation, DTO and others
        // TODO replacedNumber implementation, DTO and others
        // TODO usageNumbers2 implementation, DTO and others
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
