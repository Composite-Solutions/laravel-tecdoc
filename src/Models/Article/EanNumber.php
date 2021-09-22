<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class EanNumber extends Model
{
    /**
     * Article Ean number
     *
     * @var string
     */
    public ?string $eanNumber; //"7.03703.90.0.JPG",

    /**
     * Get article Ean number
     *
     * @return  string
     */ 
    public function getEanNumber()
    {
        return $this->eanNumber;
    }

    /**
     * Set article Ean number
     *
     * @param  string  $eanNumber  Article Ean number
     *
     * @return  self
     */ 
    public function setEanNumber(string $eanNumber = null)
    {
        $this->eanNumber = $eanNumber;

        return $this;
    }
}
