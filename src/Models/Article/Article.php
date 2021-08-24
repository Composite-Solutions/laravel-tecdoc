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
}
