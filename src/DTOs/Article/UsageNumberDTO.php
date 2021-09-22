<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\UsageNumber;

class UsageNumberDTO
{
    /**
     * Create article thumbnail model from array
     *
     * @param  array $articleThumbnailArray
     * @return ArticleThumbnail
     */
    public function createUsageNumberModel(array $usageNumberArray) : UsageNumber
    {
        $usageNumber = new UsageNumber();
        $usageNumber->setDisplayImmediate($usageNumberArray['displayImmediate'] ?? null);
        $usageNumber->setUsageNumber($usageNumberArray['usageNumber'] ?? null);
        return $usageNumber;
    }

    /**
     * Map article thumbnail array to array of article thumbnail models
     *
     * @param  array $data
     * @return array
     */
    public function mapUsageNumberCollection(array $data) : array
    {
        if (isset($data["data"]) && $data["data"]) {
            $usageNumbers = [];
            if (isset($data["data"]["array"][0]['usageNumbers2']) && $data["data"]["array"][0]['usageNumbers2']) {
                foreach ($data["data"]["array"][0]['usageNumbers2']['array'] as $usageNumber) {
                    array_push($usageNumbers, $this->createUsageNumberModel($usageNumber));
                }
            }
            return $usageNumbers;
        }
    }
}
