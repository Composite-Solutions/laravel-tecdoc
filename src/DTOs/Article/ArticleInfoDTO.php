<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\ArticleInfo;

class ArticleInfoDTO
{
    /**
     * Create article info model from array
     *
     * @param  array $articleInfoArray
     * @return ArticleInfo
     */
    public function createArticleInfoModel(array $articleInfoArray) : ArticleInfo
    {
        $articleInfo = new ArticleInfo();
        $articleInfo->setInfoId($articleInfoArray['infoId'] ?? null);
        $articleInfo->setInfoText($articleInfoArray['infoText'] ?? null);
        $articleInfo->setInfoType($articleInfoArray['infoType'] ?? null);
        $articleInfo->setInfoTypeName($articleInfoArray['infoTypeName'] ?? null);
        return $articleInfo;
    }

    /**
     * Map article documents array to array of article document models
     *
     * @param  array $data
     * @return array
     */
    public function mapArticleInfoCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $articleInfos = [];
            foreach ($data["data"]["array"][0]['articleInfo']['array'] as $articleInfo) {
                array_push($articleInfos, $this->createArticleInfoModel($articleInfo));
            }
            return $articleInfos;
        }
    }
}
