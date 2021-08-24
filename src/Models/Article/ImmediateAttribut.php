<?php

namespace Composite\TecDoc\Models\Article;

class ImmediateAttribut
{

    
    /**
     * attrBlockNo
     *
     * @var int
     */
    public ?int $attrBlockNo; // 0,
    
    /**
     * attrId
     *
     * @var int
     */
    public ?int $attrId; // 6,
    
    /**
     * attrIsConditional
     *
     * @var bool
     */
    public ?bool $attrIsConditional; // false,
    
    /**
     * attrIsInterval
     *
     * @var bool
     */
    public ?bool $attrIsInterval; // false,
    
    /**
     * attrIsLinked
     *
     * @var bool
     */
    public ?bool $attrIsLinked; // false,
    
    /**
     * attrName
     *
     * @var string
     */
    public ?string $attrName; // "Feszültség [V]",
    
    /**
     * attrShortName
     *
     * @var string
     */
    public ?string $attrShortName; // "Feszültség",
    
    /**
     * attrType
     *
     * @var string
     */
    public ?string $attrType; // "N",
    
    /**
     * attrUnit
     *
     * @var string
     */
    public ?string $attrUnit; // "V",
    
    /**
     * attrValue
     *
     * @var string
     */
    public ?string $attrValue; // "12",
    
    /**
     * attrValueId
     *
     * @var int
     */
    public ?int $attrValueId; // 19274

    /**
     * Get attrBlockNo
     *
     * @return  int
     */ 
    public function getAttrBlockNo()
    {
        return $this->attrBlockNo;
    }

    /**
     * Set attrBlockNo
     *
     * @param  int  $attrBlockNo  attrBlockNo
     *
     * @return  self
     */ 
    public function setAttrBlockNo(int $attrBlockNo = null)
    {
        $this->attrBlockNo = $attrBlockNo;

        return $this;
    }

    /**
     * Get attrId
     *
     * @return  int
     */ 
    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * Set attrId
     *
     * @param  int  $attrId  attrId
     *
     * @return  self
     */ 
    public function setAttrId(int $attrId = null)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attrIsConditional
     *
     * @return  bool
     */ 
    public function getAttrIsConditional()
    {
        return $this->attrIsConditional;
    }

    /**
     * Set attrIsConditional
     *
     * @param  bool  $attrIsConditional  attrIsConditional
     *
     * @return  self
     */ 
    public function setAttrIsConditional(bool $attrIsConditional = null)
    {
        $this->attrIsConditional = $attrIsConditional;

        return $this;
    }

    /**
     * Get attrIsInterval
     *
     * @return  bool
     */ 
    public function getAttrIsInterval()
    {
        return $this->attrIsInterval;
    }

    /**
     * Set attrIsInterval
     *
     * @param  bool  $attrIsInterval  attrIsInterval
     *
     * @return  self
     */ 
    public function setAttrIsInterval(bool $attrIsInterval = null)
    {
        $this->attrIsInterval = $attrIsInterval;

        return $this;
    }

    /**
     * Get attrIsLinked
     *
     * @return  bool
     */ 
    public function getAttrIsLinked()
    {
        return $this->attrIsLinked;
    }

    /**
     * Set attrIsLinked
     *
     * @param  bool  $attrIsLinked  attrIsLinked
     *
     * @return  self
     */ 
    public function setAttrIsLinked(bool $attrIsLinked = null)
    {
        $this->attrIsLinked = $attrIsLinked;

        return $this;
    }

    /**
     * Get attrName
     *
     * @return  string
     */ 
    public function getAttrName()
    {
        return $this->attrName;
    }

    /**
     * Set attrName
     *
     * @param  string  $attrName  attrName
     *
     * @return  self
     */ 
    public function setAttrName(string $attrName = null)
    {
        $this->attrName = $attrName;

        return $this;
    }

    /**
     * Get attrShortName
     *
     * @return  string
     */ 
    public function getAttrShortName()
    {
        return $this->attrShortName;
    }

    /**
     * Set attrShortName
     *
     * @param  string  $attrShortName  attrShortName
     *
     * @return  self
     */ 
    public function setAttrShortName(string $attrShortName = null)
    {
        $this->attrShortName = $attrShortName;

        return $this;
    }

    /**
     * Get attrType
     *
     * @return  string
     */ 
    public function getAttrType()
    {
        return $this->attrType;
    }

    /**
     * Set attrType
     *
     * @param  string  $attrType  attrType
     *
     * @return  self
     */ 
    public function setAttrType(string $attrType = null)
    {
        $this->attrType = $attrType;

        return $this;
    }

    /**
     * Get attrUnit
     *
     * @return  string
     */ 
    public function getAttrUnit()
    {
        return $this->attrUnit;
    }

    /**
     * Set attrUnit
     *
     * @param  string  $attrUnit  attrUnit
     *
     * @return  self
     */ 
    public function setAttrUnit(string $attrUnit = null)
    {
        $this->attrUnit = $attrUnit;

        return $this;
    }

    /**
     * Get attrValue
     *
     * @return  string
     */ 
    public function getAttrValue()
    {
        return $this->attrValue;
    }

    /**
     * Set attrValue
     *
     * @param  string  $attrValue  attrValue
     *
     * @return  self
     */ 
    public function setAttrValue(string $attrValue = null)
    {
        $this->attrValue = $attrValue;

        return $this;
    }

    /**
     * Get attrValueId
     *
     * @return  int
     */ 
    public function getAttrValueId()
    {
        return $this->attrValueId;
    }

    /**
     * Set attrValueId
     *
     * @param  int  $attrValueId  attrValueId
     *
     * @return  self
     */ 
    public function setAttrValueId(int $attrValueId = null)
    {
        $this->attrValueId = $attrValueId;

        return $this;
    }
}
