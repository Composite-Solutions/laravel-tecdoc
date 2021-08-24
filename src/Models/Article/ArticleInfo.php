<?php

namespace Composite\TecDoc\Models\Article;

class ArticleInfo
{
    /**
     * Article info Id
     *
     * @var int
     */
    public ?int $infoId; // 42750,
    
    /**
     * Article info text
     *
     * @var string
     */
    public ?string $infoText; // "Attention - Article needs programming when indicated. Observ<br>e the guidelines of the vehicle manufacturer.",
    
    /**
     * Article info type
     *
     * @var int
     */
    public ?int $infoType; // 2,
    
    /**
     * Article info type name
     *
     * @var string
     */
    public ?string $infoTypeName; // "Általános információ"


    /**
     * Get article info type name
     *
     * @return  string
     */ 
    public function getInfoTypeName()
    {
        return $this->infoTypeName;
    }

    /**
     * Set article info type name
     *
     * @param  string  $infoTypeName  Article info type name
     *
     * @return  self
     */ 
    public function setInfoTypeName(string $infoTypeName = null)
    {
        $this->infoTypeName = $infoTypeName;

        return $this;
    }

    /**
     * Get article info type
     *
     * @return  int
     */ 
    public function getInfoType()
    {
        return $this->infoType;
    }

    /**
     * Set article info type
     *
     * @param  int  $infoType  Article info type
     *
     * @return  self
     */ 
    public function setInfoType(int $infoType = null)
    {
        $this->infoType = $infoType;

        return $this;
    }

    /**
     * Get article info text
     *
     * @return  string
     */ 
    public function getInfoText()
    {
        return $this->infoText;
    }

    /**
     * Set article info text
     *
     * @param  string  $infoText  Article info text
     *
     * @return  self
     */ 
    public function setInfoText(string $infoText = null)
    {
        $this->infoText = $infoText;

        return $this;
    }

    /**
     * Get article info Id
     *
     * @return  int
     */ 
    public function getInfoId()
    {
        return $this->infoId;
    }

    /**
     * Set article info Id
     *
     * @param  int  $infoId  Article info Id
     *
     * @return  self
     */ 
    public function setInfoId(int $infoId = null)
    {
        $this->infoId = $infoId;

        return $this;
    }
}
