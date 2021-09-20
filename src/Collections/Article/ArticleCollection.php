<?php

namespace Composite\TecDoc\Collections\Article;

use Composite\TecDoc\Models\Article\Article;

class ArticleCollection
{
    /**
     * Article array
     *
     * @var array
     */
    private array $_articles;
    
    /**
     * Init articles empty array
     *
     * @return void
     */
    public function __construct()
    {
        $this->_articles = [];
    }
    
    /**
     * Add article object to articles array
     *
     * @param  mixed $article
     * @return void
     */
    public function add(Article $articles) : void
    {
        array_push($this->_articles, $articles);
    }    
    
    /**
     * return articles private variable as an array
     *
     * @return array
     */
    public function toArray() : array
    {
        return $this->_articles;
    }
}
