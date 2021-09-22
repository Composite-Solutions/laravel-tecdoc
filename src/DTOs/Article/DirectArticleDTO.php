<?php

namespace Composite\TecDoc\DTOs\Article;

use Composite\TecDoc\Models\Article\DirectArticle;

class DirectArticleDTO
{
    /**
     * Create article info model from array
     *
     * @param  array $directArticleArray
     * @return DirectArticle
     */
    public function createDirectArticleModel(array $directArticleArray) : DirectArticle
    {
        $directArticleArray = $directArticleArray["data"]["array"][0]['directArticle'];
        $directArticle = new DirectArticle();
        $directArticle->setArticleId($directArticleArray["articleId"] ?? null);
        $directArticle->setArticleName($directArticleArray["articleName"] ?? null);
        $directArticle->setArticleNo($directArticleArray["articleNo"] ?? null);
        $directArticle->setArticleState($directArticleArray["articleState"] ?? null);
        $directArticle->setArticleStateName($directArticleArray["articleStateName"] ?? null);
        $directArticle->setBrandName($directArticleArray["brandName"] ?? null);
        $directArticle->setBrandNo($directArticleArray["brandNo"] ?? null);
        $directArticle->setFlagAccessories($directArticleArray["flagAccessories"] ?? null);
        $directArticle->setFlagCertificationCompulsory($directArticleArray["flagCertificationCompulsory"] ?? null);
        $directArticle->setFlagRemanufacturedPart($directArticleArray["flagRemanufacturedPart"] ?? null);
        $directArticle->setFlagSuitedforSelfService($directArticleArray["flagSuitedforSelfService"] ?? null);
        $directArticle->setGenericArticleId($directArticleArray["genericArticleId"] ?? null);
        $directArticle->setHasAppendage($directArticleArray["hasAppendage"] ?? null);
        $directArticle->setHasAxleLink($directArticleArray["hasAxleLink"] ?? null);
        $directArticle->setHasCsGraphics($directArticleArray["hasCsGraphics"] ?? null);
        $directArticle->setHasDocuments($directArticleArray["hasDocuments"] ?? null);
        $directArticle->setHasLessDiscount($directArticleArray["hasLessDiscount"] ?? null);
        $directArticle->setHasMarkLink($directArticleArray["hasMarkLink"] ?? null);
        $directArticle->setHasMotorLink($directArticleArray["hasMotorLink"] ?? null);
        $directArticle->setHasOEN($directArticleArray["hasOEN"] ?? null);
        $directArticle->setHasPartList($directArticleArray["hasPartList"] ?? null);
        $directArticle->setHasPrices($directArticleArray["hasPrices"] ?? null);
        $directArticle->setHasSecurityInfo($directArticleArray["hasSecurityInfo"] ?? null);
        $directArticle->setHasUsage($directArticleArray["hasUsage"] ?? null);
        $directArticle->setHasVehicleLink($directArticleArray["hasVehicleLink"] ?? null);
        $directArticle->setPackingUnit($directArticleArray["packingUnit"] ?? null);
        return $directArticle;
    }
}
