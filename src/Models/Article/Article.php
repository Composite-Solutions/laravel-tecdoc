<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class Article extends Model
{    
    /**
     * Article attributes array
     *
     * @var array
     */
    public ?array $articleAttributes;

    /**
     * Article Documents array
     *
     * @var array
     */
    public ?array $articleDocuments;
    
    /**
     * Article Info array
     *
     * @var array
     */
    public ?array $articleInfo;
    
    /**
     * Article thumnail array
     *
     * @var array
     */
    public ?array $articleThumbnails;

    /**
     * Direct article infos
     *
     * @var DirectArticle
     */
    public ?DirectArticle $directArticle;

    /**
     * Article ean number array
     *
     * @var array
     */
    public ?array $eanNumber;

    /**
     * Article immediate attributs
     *
     * @var array
     */
    public ?array $immediateAttributs;

    /**
     * Article oenNumbers
     *
     * @var array
     */
    public ?array $oenNumbers;

    /**
     * Article oenNumbers
     *
     * @var array
     */
    public ?array $usageNumbers;
    
        
    /**
     * Get article attributes
     *
     * @return array
     */
    public function getArticleAttributes() : array
    {
        return $this->articleAttributes;
    }    
    
    /**
     * Set article attributes
     *
     * @param  array $articleAttributes
     * @return void
     */
    public function setArticleAttributes(array $articleAttributes = null) : void
    {
        $this->articleAttributes = $articleAttributes;
    }

    /**
     * Get article Documents array
     *
     * @return  array
     */ 
    public function getArticleDocuments()
    {
        return $this->articleDocuments;
    }

    /**
     * Set article Documents array
     *
     * @param  array  $articleDocuments  Article Documents array
     *
     * @return  self
     */ 
    public function setArticleDocuments(array $articleDocuments = null)
    {
        $this->articleDocuments = $articleDocuments;

        return $this;
    }

    /**
     * Get article Info array
     *
     * @return  array
     */ 
    public function getArticleInfo()
    {
        return $this->articleInfo;
    }

    /**
     * Set article Info array
     *
     * @param  array  $articleInfo  Article Info array
     *
     * @return  self
     */ 
    public function setArticleInfo(array $articleInfo = null)
    {
        $this->articleInfo = $articleInfo;

        return $this;
    }

    /**
     * Get article thumnail array
     *
     * @return  array
     */ 
    public function getArticleThumbnails()
    {
        return $this->articleThumbnails;
    }

    /**
     * Set article thumnail array
     *
     * @param  array  $articleThumbnails  Article thumnail array
     *
     * @return  self
     */ 
    public function setArticleThumbnails(array $articleThumbnails = null)
    {
        $this->articleThumbnails = $articleThumbnails;

        return $this;
    }

    /**
     * Get article thumnail array
     *
     * @return  DirectArticle
     */ 
    public function getDirectArticle()
    {
        return $this->directArticle;
    }

    /**
     * Set article thumnail array
     *
     * @param  DirectArticle  $directArticle  Article thumnail array
     *
     * @return  self
     */ 
    public function setDirectArticle(DirectArticle $directArticle = null)
    {
        $this->directArticle = $directArticle;

        return $this;
    }

    /**
     * Get article ean number array
     *
     * @return  array
     */ 
    public function getEanNumber()
    {
        return $this->eanNumber;
    }

    /**
     * Set article ean number array
     *
     * @param  array  $eanNumber  Article ean number array
     *
     * @return  self
     */ 
    public function setEanNumber(array $eanNumber = null)
    {
        $this->eanNumber = $eanNumber;

        return $this;
    }

    /**
     * Get article immediate attributs
     *
     * @return  array
     */ 
    public function getImmediateAttributs()
    {
        return $this->immediateAttributs;
    }

    /**
     * Set article immediate attributs
     *
     * @param  array  $immediateAttributs  Article immediate attributs
     *
     * @return  self
     */ 
    public function setImmediateAttributs(array $immediateAttributs = null)
    {
        $this->immediateAttributs = $immediateAttributs;

        return $this;
    }

    /**
     * Get article oenNumbers
     *
     * @return  array
     */ 
    public function getOenNumbers()
    {
        return $this->oenNumbers;
    }

    /**
     * Set article oenNumbers
     *
     * @param  array  $oenNumbers  Article oenNumbers
     *
     * @return  self
     */ 
    public function setOenNumbers(array $oenNumbers)
    {
        $this->oenNumbers = $oenNumbers;

        return $this;
    }

    /**
     * Get article usageNumbers
     *
     * @return  array
     */ 
    public function getUsageNumbers()
    {
        return $this->usageNumbers;
    }

    /**
     * Set article usageNumbers
     *
     * @param  array  $usageNumbers  Article usageNumbers
     *
     * @return  self
     */ 
    public function setUsageNumbers(array $usageNumbers)
    {
        $this->usageNumbers = $usageNumbers;

        return $this;
    }
}
