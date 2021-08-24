<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Collections\Article\ArticleAttributeCollection;

class Article
{    
    /**
     * Manufacturer ID
     *
     * @var array
     */
    public array $articleAttributes;
    
        
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
     * @param  array $manuId
     * @return void
     */
    public function setArticleAttributes(array $articleAttributes)
    {
        $this->articleAttributes = $articleAttributes;
    }
}
