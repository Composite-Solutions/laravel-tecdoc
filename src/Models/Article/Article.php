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
    public array $articleAttributes;

    /**
     * Article Documents array
     *
     * @var array
     */
    public array $articleDocuments;
    
    /**
     * Article Info array
     *
     * @var array
     */
    public array $articleInfo;
    
        
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
    public function setArticleAttributes(array $articleAttributes) : void
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
    public function setArticleDocuments(array $articleDocuments)
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
    public function setArticleInfo(array $articleInfo)
    {
        $this->articleInfo = $articleInfo;

        return $this;
    }
}