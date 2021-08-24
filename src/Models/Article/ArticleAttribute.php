<?php

namespace Composite\TecDoc\Models\Article;

class ArticleAttribute
{    
    /**
     * Article block number
     *
     * @var int
     */
    public int $attrBlockNo;
    
        
    /**
     * Get article block number
     *
     * @return int
     */
    public function getAttrBlockNo() : int
    {
        return $this->attrBlockNo;
    }    
    
    /**
     * Set article attributes
     *
     * @param  int $manuId
     * @return void
     */
    public function setAttrBlockNo(int $attrBlockNo)
    {
        $this->attrBlockNo = $attrBlockNo;
    }    
}
