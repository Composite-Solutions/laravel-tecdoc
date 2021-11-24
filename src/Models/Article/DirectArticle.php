<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class DirectArticle extends Model
{
    /**
     * Article ID
     *
     * @var int
     */
    public ?int $articleId; // 599605873,
    
    /**
     * Article name
     *
     * @var string
     */
    public ?string $articleName; // "fojtószelep ház",

    /**
     * Article add name
     *
     * @var string
     */
    public ?string $articleAddName; // "fojtószelep ház",
    
    /**
     * Article number
     *
     * @var string
     */
    public ?string $articleNo; // "7.03703.90.0",
    
    /**
     * Article state
     *
     * @var int
     */
    public ?int $articleState; // 1,
    
    /**
     * Article state name
     *
     * @var string
     */
    public ?string $articleStateName; // "normál",
    
    /**
     * Article brand name
     *
     * @var string
     */
    public ?string $brandName; // "PIERBURG",
    
    /**
     * Article brand number
     *
     * @var int
     */
    public ?int $brandNo; // 5,
    
    /**
     * Article flag accessories
     *
     * @var bool
     */
    public ?bool $flagAccessories; // false,
    
    /**
     * Article flag cert compulsory
     *
     * @var bool
     */
    public ?bool $flagCertificationCompulsory; // false,
    
    /**
     * flagRemanufacturedPart
     *
     * @var bool
     */
    public ?bool $flagRemanufacturedPart; // false,
    
    /**
     * flagSuitedforSelfService
     *
     * @var bool
     */
    public ?bool $flagSuitedforSelfService; // false,
    
    /**
     * genericArticleId
     *
     * @var int
     */
    public ?int $genericArticleId; // 158,
    
    /**
     * hasAppendage
     *
     * @var bool
     */
    public ?bool $hasAppendage; // false,
    
    /**
     * hasAxleLink
     *
     * @var bool
     */
    public ?bool $hasAxleLink; // false,
    
    /**
     * hasCsGraphics
     *
     * @var bool
     */
    public ?bool $hasCsGraphics; // false,
    
    /**
     * hasDocuments
     *
     * @var bool
     */
    public ?bool $hasDocuments; // true,
    
    /**
     * hasLessDiscount
     *
     * @var bool
     */
    public ?bool $hasLessDiscount; // false,
    
    /**
     * hasMarkLink
     *
     * @var bool
     */
    public ?bool $hasMarkLink; // false,
    
    /**
     * hasMotorLink
     *
     * @var bool
     */
    public ?bool $hasMotorLink; // true,
    
    /**
     * hasOEN
     *
     * @var string
     */
    public ?bool $hasOEN; // true,
    
    /**
     * hasPartList
     *
     * @var bool
     */
    public ?bool $hasPartList; // false,
    
    /**
     * hasPrices
     *
     * @var bool
     */
    public ?bool $hasPrices; // false,
    
    /**
     * hasSecurityInfo
     *
     * @var bool
     */
    public ?bool $hasSecurityInfo; // false,
    
    /**
     * hasUsage
     *
     * @var bool
     */
    public ?bool $hasUsage; // false,
    
    /**
     * hasVehicleLink
     *
     * @var bool
     */
    public ?bool $hasVehicleLink; // true,
    
    /**
     * packingUnit
     *
     * @var int
     */
    public ?int $packingUnit; // 1

    /**
     * Get packingUnit
     *
     * @return  int
     */ 
    public function getPackingUnit()
    {
        return $this->packingUnit;
    }

    /**
     * Set packingUnit
     *
     * @param  int  $packingUnit  packingUnit
     *
     * @return  self
     */ 
    public function setPackingUnit(int $packingUnit = null)
    {
        $this->packingUnit = $packingUnit;

        return $this;
    }

    /**
     * Get hasVehicleLink
     *
     * @return  bool
     */ 
    public function getHasVehicleLink()
    {
        return $this->hasVehicleLink;
    }

    /**
     * Set hasVehicleLink
     *
     * @param  bool  $hasVehicleLink  hasVehicleLink
     *
     * @return  self
     */ 
    public function setHasVehicleLink(bool $hasVehicleLink = null)
    {
        $this->hasVehicleLink = $hasVehicleLink;

        return $this;
    }

    /**
     * Get hasUsage
     *
     * @return  bool
     */ 
    public function getHasUsage()
    {
        return $this->hasUsage;
    }

    /**
     * Set hasUsage
     *
     * @param  bool  $hasUsage  hasUsage
     *
     * @return  self
     */ 
    public function setHasUsage(bool $hasUsage = null)
    {
        $this->hasUsage = $hasUsage;

        return $this;
    }

    /**
     * Get hasSecurityInfo
     *
     * @return  bool
     */ 
    public function getHasSecurityInfo()
    {
        return $this->hasSecurityInfo;
    }

    /**
     * Set hasSecurityInfo
     *
     * @param  bool  $hasSecurityInfo  hasSecurityInfo
     *
     * @return  self
     */ 
    public function setHasSecurityInfo(bool $hasSecurityInfo = null)
    {
        $this->hasSecurityInfo = $hasSecurityInfo;

        return $this;
    }

    /**
     * Get hasPrices
     *
     * @return  bool
     */ 
    public function getHasPrices()
    {
        return $this->hasPrices;
    }

    /**
     * Set hasPrices
     *
     * @param  bool  $hasPrices  hasPrices
     *
     * @return  self
     */ 
    public function setHasPrices(bool $hasPrices = null)
    {
        $this->hasPrices = $hasPrices;

        return $this;
    }

    /**
     * Get hasPartList
     *
     * @return  bool
     */ 
    public function getHasPartList()
    {
        return $this->hasPartList;
    }

    /**
     * Set hasPartList
     *
     * @param  bool  $hasPartList  hasPartList
     *
     * @return  self
     */ 
    public function setHasPartList(bool $hasPartList = null)
    {
        $this->hasPartList = $hasPartList;

        return $this;
    }

    /**
     * Get hasOEN
     *
     * @return  string
     */ 
    public function getHasOEN()
    {
        return $this->hasOEN;
    }

    /**
     * Set hasOEN
     *
     * @param  string  $hasOEN  hasOEN
     *
     * @return  self
     */ 
    public function setHasOEN(string $hasOEN = null)
    {
        $this->hasOEN = $hasOEN;

        return $this;
    }

    /**
     * Get hasMotorLink
     *
     * @return  bool
     */ 
    public function getHasMotorLink()
    {
        return $this->hasMotorLink;
    }

    /**
     * Set hasMotorLink
     *
     * @param  bool  $hasMotorLink  hasMotorLink
     *
     * @return  self
     */ 
    public function setHasMotorLink(bool $hasMotorLink = null)
    {
        $this->hasMotorLink = $hasMotorLink;

        return $this;
    }

    /**
     * Get hasMarkLink
     *
     * @return  bool
     */ 
    public function getHasMarkLink()
    {
        return $this->hasMarkLink;
    }

    /**
     * Set hasMarkLink
     *
     * @param  bool  $hasMarkLink  hasMarkLink
     *
     * @return  self
     */ 
    public function setHasMarkLink(bool $hasMarkLink = null)
    {
        $this->hasMarkLink = $hasMarkLink;

        return $this;
    }

    /**
     * Get hasLessDiscount
     *
     * @return  bool
     */ 
    public function getHasLessDiscount()
    {
        return $this->hasLessDiscount;
    }

    /**
     * Set hasLessDiscount
     *
     * @param  bool  $hasLessDiscount  hasLessDiscount
     *
     * @return  self
     */ 
    public function setHasLessDiscount(bool $hasLessDiscount = null)
    {
        $this->hasLessDiscount = $hasLessDiscount;

        return $this;
    }

    /**
     * Get hasDocuments
     *
     * @return  bool
     */ 
    public function getHasDocuments()
    {
        return $this->hasDocuments;
    }

    /**
     * Set hasDocuments
     *
     * @param  bool  $hasDocuments  hasDocuments
     *
     * @return  self
     */ 
    public function setHasDocuments(bool $hasDocuments = null)
    {
        $this->hasDocuments = $hasDocuments;

        return $this;
    }

    /**
     * Get hasCsGraphics
     *
     * @return  bool
     */ 
    public function getHasCsGraphics()
    {
        return $this->hasCsGraphics;
    }

    /**
     * Set hasCsGraphics
     *
     * @param  bool  $hasCsGraphics  hasCsGraphics
     *
     * @return  self
     */ 
    public function setHasCsGraphics(bool $hasCsGraphics = null)
    {
        $this->hasCsGraphics = $hasCsGraphics;

        return $this;
    }

    /**
     * Get hasAxleLink
     *
     * @return  bool
     */ 
    public function getHasAxleLink()
    {
        return $this->hasAxleLink;
    }

    /**
     * Set hasAxleLink
     *
     * @param  bool  $hasAxleLink  hasAxleLink
     *
     * @return  self
     */ 
    public function setHasAxleLink(bool $hasAxleLink = null)
    {
        $this->hasAxleLink = $hasAxleLink;

        return $this;
    }

    /**
     * Get hasAppendage
     *
     * @return  bool
     */ 
    public function getHasAppendage()
    {
        return $this->hasAppendage;
    }

    /**
     * Set hasAppendage
     *
     * @param  bool  $hasAppendage  hasAppendage
     *
     * @return  self
     */ 
    public function setHasAppendage(bool $hasAppendage = null)
    {
        $this->hasAppendage = $hasAppendage;

        return $this;
    }

    /**
     * Get genericArticleId
     *
     * @return  int
     */ 
    public function getGenericArticleId()
    {
        return $this->genericArticleId;
    }

    /**
     * Set genericArticleId
     *
     * @param  int  $genericArticleId  genericArticleId
     *
     * @return  self
     */ 
    public function setGenericArticleId(int $genericArticleId = null)
    {
        $this->genericArticleId = $genericArticleId;

        return $this;
    }

    /**
     * Get flagSuitedforSelfService
     *
     * @return  bool
     */ 
    public function getFlagSuitedforSelfService()
    {
        return $this->flagSuitedforSelfService;
    }

    /**
     * Set flagSuitedforSelfService
     *
     * @param  bool  $flagSuitedforSelfService  flagSuitedforSelfService
     *
     * @return  self
     */ 
    public function setFlagSuitedforSelfService(bool $flagSuitedforSelfService = null)
    {
        $this->flagSuitedforSelfService = $flagSuitedforSelfService;

        return $this;
    }

    /**
     * Get flagRemanufacturedPart
     *
     * @return  bool
     */ 
    public function getFlagRemanufacturedPart()
    {
        return $this->flagRemanufacturedPart;
    }

    /**
     * Set flagRemanufacturedPart
     *
     * @param  bool  $flagRemanufacturedPart  flagRemanufacturedPart
     *
     * @return  self
     */ 
    public function setFlagRemanufacturedPart(bool $flagRemanufacturedPart = null)
    {
        $this->flagRemanufacturedPart = $flagRemanufacturedPart;

        return $this;
    }

    /**
     * Get article flag cert compulsory
     *
     * @return  bool
     */ 
    public function getFlagCertificationCompulsory()
    {
        return $this->flagCertificationCompulsory;
    }

    /**
     * Set article flag cert compulsory
     *
     * @param  bool  $flagCertificationCompulsory  Article flag cert compulsory
     *
     * @return  self
     */ 
    public function setFlagCertificationCompulsory(bool $flagCertificationCompulsory = null)
    {
        $this->flagCertificationCompulsory = $flagCertificationCompulsory;

        return $this;
    }

    /**
     * Get article flag accessories
     *
     * @return  bool
     */ 
    public function getFlagAccessories()
    {
        return $this->flagAccessories;
    }

    /**
     * Set article flag accessories
     *
     * @param  bool  $flagAccessories  Article flag accessories
     *
     * @return  self
     */ 
    public function setFlagAccessories(bool $flagAccessories = null)
    {
        $this->flagAccessories = $flagAccessories;

        return $this;
    }

    /**
     * Get article brand number
     *
     * @return  int
     */ 
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Set article brand number
     *
     * @param  int  $brandNo  Article brand number
     *
     * @return  self
     */ 
    public function setBrandNo(int $brandNo = null)
    {
        $this->brandNo = $brandNo;

        return $this;
    }

    /**
     * Get article brand name
     *
     * @return  string
     */ 
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set article brand name
     *
     * @param  string  $brandName  Article brand name
     *
     * @return  self
     */ 
    public function setBrandName(string $brandName = null)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get article state name
     *
     * @return  string
     */ 
    public function getArticleStateName()
    {
        return $this->articleStateName;
    }

    /**
     * Set article state name
     *
     * @param  string  $articleStateName  Article state name
     *
     * @return  self
     */ 
    public function setArticleStateName(string $articleStateName = null)
    {
        $this->articleStateName = $articleStateName;

        return $this;
    }

    /**
     * Get article state
     *
     * @return  int
     */ 
    public function getArticleState()
    {
        return $this->articleState;
    }

    /**
     * Set article state
     *
     * @param  int  $articleState  Article state
     *
     * @return  self
     */ 
    public function setArticleState(int $articleState = null)
    {
        $this->articleState = $articleState;

        return $this;
    }

    /**
     * Get article number
     *
     * @return  string
     */ 
    public function getArticleNo()
    {
        return $this->articleNo;
    }

    /**
     * Set article number
     *
     * @param  string  $articleNo  Article number
     *
     * @return  self
     */ 
    public function setArticleNo(string $articleNo = null)
    {
        $this->articleNo = $articleNo;

        return $this;
    }

    /**
     * Get article name
     *
     * @return  string
     */ 
    public function getArticleName()
    {
        return $this->articleName;
    }

    /**
     * Set article name
     *
     * @param  string  $articleName  Article name
     *
     * @return  self
     */ 
    public function setArticleName(string $articleName = null)
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * Get article aa name
     *
     * @return  string
     */ 
    public function getArticleAddName()
    {
        return $this->articleAddName;
    }

    /**
     * Set article add name
     *
     * @param  string  $articleAddName  Article aa name
     *
     * @return  self
     */ 
    public function setArticleAddName(string $articleAddName = null)
    {
        $this->articleAddName = $articleAddName;

        return $this;
    }

    /**
     * Get article ID
     *
     * @return  int
     */ 
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set article ID
     *
     * @param  int  $articleId  Article ID
     *
     * @return  self
     */ 
    public function setArticleId(int $articleId = null)
    {
        $this->articleId = $articleId;

        return $this;
    }
}
