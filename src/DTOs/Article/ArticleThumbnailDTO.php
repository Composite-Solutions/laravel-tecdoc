<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\ArticleThumbnail;

class ArticleThumbnailDTO
{
    /**
     * Create article thumbnail model from array
     *
     * @param  array $articleThumbnailArray
     * @return ArticleThumbnail
     */
    public function createArticleThumbnailModel(array $articleThumbnailArray) : ArticleThumbnail
    {
        $articleThumbnail = new ArticleThumbnail();
        $articleThumbnail->setthumbDocId($articleThumbnailArray['thumbDocId'] ?? null);
        $articleThumbnail->setthumbFileName($articleThumbnailArray['thumbFileName'] ?? null);
        $articleThumbnail->setthumbTypeId($articleThumbnailArray['thumbTypeId'] ?? null);
        return $articleThumbnail;
    }

    /**
     * Map article thumbnail array to array of article thumbnail models
     *
     * @param  array $data
     * @return array
     */
    public function mapArticleThumbnailCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $articleThumbnails = [];
            foreach ($data["data"]["array"][0]['articleThumbnails']['array'] as $articleThumbnail) {
                array_push($articleThumbnails, $this->createArticleThumbnailModel($articleThumbnail));
            }
            return $articleThumbnails;
        }
    }
}
