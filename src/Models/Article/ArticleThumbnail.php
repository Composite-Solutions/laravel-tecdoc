<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class ArticleThumbnail extends Model
{
    /**
     * Thumbnail doc id
     *
     * @var string
     */
    public ?string $thumbDocId; // "845520147293266",

    /**
     * Thumbnail filename
     *
     * @var string
     */
    public ?string $thumbFileName; // "0005\\7.03703.90.0.JPG",

    /**
     * Thumbnail type id
     *
     * @var string
     */
    public ?int $thumbTypeId; // 5

    /**
     * Get thumbnail doc id
     *
     * @return  string
     */ 
    public function getThumbDocId()
    {
        return $this->thumbDocId;
    }

    /**
     * Set thumbnail doc id
     *
     * @param  string  $thumbDocId  Thumbnail doc id
     *
     * @return  self
     */ 
    public function setThumbDocId(string $thumbDocId)
    {
        $this->thumbDocId = $thumbDocId;

        return $this;
    }

    /**
     * Get thumbnail filename
     *
     * @return  string
     */ 
    public function getThumbFileName()
    {
        return $this->thumbFileName;
    }

    /**
     * Set thumbnail filename
     *
     * @param  string  $thumbFileName  Thumbnail filename
     *
     * @return  self
     */ 
    public function setThumbFileName(string $thumbFileName)
    {
        $this->thumbFileName = $thumbFileName;

        return $this;
    }

    /**
     * Get thumbnail type id
     *
     * @return  string
     */ 
    public function getThumbTypeId()
    {
        return $this->thumbTypeId;
    }

    /**
     * Set thumbnail type id
     *
     * @param  string  $thumbTypeId  Thumbnail type id
     *
     * @return  self
     */ 
    public function setThumbTypeId(string $thumbTypeId)
    {
        $this->thumbTypeId = $thumbTypeId;

        return $this;
    }
}
