<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class ArticleAttribute extends Model
{    
    /**
     * Attribute block number
     *
     * @var int
     */
    public ?int $attrBlockNo;

     /**
     * Attribute id
     *
     * @var int
     */
    public ?int $attrId; // 439,

     /**
     * Is attribute conditional
     *
     * @var bool
     */
    public ?bool $attrIsConditional; // false,

     /**
     * Is attribute interval
     *
     * @var bool
     */
    public ?bool $attrIsInterval; // false,

     /**
     * Is attribute linked
     *
     * @var bool
     */
    public ?bool $attrIsLinked; // false,

     /**
     * Attribute name
     *
     * @var string
     */
    public ?string $attrName; // "Működési mód",

     /**
     * Attribute short name
     *
     * @var string
     */
    public ?string $attrShortName; // "Működési mód",

     /**
     * Attribute type
     *
     * @var string
     */
    public ?string $attrType; // "K",

     /**
     * Attribute type
     *
     * @var string
     */
    public ?string $attrUnit; // "mm",

     /**
     * Attribute value
     *
     * @var string
     */
    public ?string $attrValue; // "elektromos",

     /**
     * Attribute value id
     *
     * @var int
     */
    public ?int $attrValueId; // 14811

    /**
     * Get attribute value id
     *
     * @return  int
     */ 
    public function getAttrValueId()
    {
        return $this->attrValueId;
    }

    /**
     * Set attribute value id
     *
     * @param  int  $attrValueId  Attribute value id
     *
     * @return  self
     */ 
    public function setAttrValueId(int $attrValueId = null)
    {
        $this->attrValueId = $attrValueId;

        return $this;
    }

    /**
     * Get attribute value
     *
     * @return  string
     */ 
    public function getAttrValue()
    {
        return $this->attrValue;
    }

    /**
     * Set attribute value
     *
     * @param  string  $attrValue  Attribute value
     *
     * @return  self
     */ 
    public function setAttrValue(string $attrValue = null)
    {
        $this->attrValue = $attrValue;

        return $this;
    }

    /**
     * Get attribute type
     *
     * @return  string
     */ 
    public function getAttrType()
    {
        return $this->attrType;
    }

    /**
     * Set attribute type
     *
     * @param  string  $attrType  Attribute type
     *
     * @return  self
     */ 
    public function setAttrType(string $attrType = null)
    {
        $this->attrType = $attrType;

        return $this;
    }

    /**
     * Get attribute short name
     *
     * @return  string
     */ 
    public function getAttrShortName()
    {
        return $this->attrShortName;
    }

    /**
     * Set attribute short name
     *
     * @param  string  $attrShortName  Attribute short name
     *
     * @return  self
     */ 
    public function setAttrShortName(string $attrShortName = null)
    {
        $this->attrShortName = $attrShortName;

        return $this;
    }

    /**
     * Get attribute name
     *
     * @return  string
     */ 
    public function getAttrName()
    {
        return $this->attrName;
    }

    /**
     * Set attribute name
     *
     * @param  string  $attrName  Attribute name
     *
     * @return  self
     */ 
    public function setAttrName(string $attrName = null)
    {
        $this->attrName = $attrName;

        return $this;
    }

    /**
     * Get is attribute linked
     *
     * @return  bool
     */ 
    public function getAttrIsLinked()
    {
        return $this->attrIsLinked;
    }

    /**
     * Set is attribute linked
     *
     * @param  bool  $attrIsLinked  Is attribute linked
     *
     * @return  self
     */ 
    public function setAttrIsLinked(bool $attrIsLinked = null)
    {
        $this->attrIsLinked = $attrIsLinked;

        return $this;
    }

    /**
     * Get is attribute interval
     *
     * @return  bool
     */ 
    public function getAttrIsInterval()
    {
        return $this->attrIsInterval;
    }

    /**
     * Set is attribute interval
     *
     * @param  bool  $attrIsInterval  Is attribute interval
     *
     * @return  self
     */ 
    public function setAttrIsInterval(bool $attrIsInterval = null)
    {
        $this->attrIsInterval = $attrIsInterval;

        return $this;
    }

    /**
     * Get is attribute conditional
     *
     * @return  bool
     */ 
    public function getAttrIsConditional()
    {
        return $this->attrIsConditional;
    }

    /**
     * Set is attribute conditional
     *
     * @param  bool  $attrIsConditional  Is attribute conditional
     *
     * @return  self
     */ 
    public function setAttrIsConditional(bool $attrIsConditional = null)
    {
        $this->attrIsConditional = $attrIsConditional;

        return $this;
    }

    /**
     * Get attribute id
     *
     * @return  int
     */ 
    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * Set attribute id
     *
     * @param  int  $attrId  Attribute id
     *
     * @return  self
     */ 
    public function setAttrId(int $attrId = null)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attribute block number
     *
     * @return  int
     */ 
    public function getAttrBlockNo()
    {
        return $this->attrBlockNo;
    }

    /**
     * Set attribute block number
     *
     * @param  int  $attrBlockNo  Attribute block number
     *
     * @return  self
     */ 
    public function setAttrBlockNo(int $attrBlockNo = null)
    {
        $this->attrBlockNo = $attrBlockNo;

        return $this;
    }

    /**
     * Get attribute type
     *
     * @return  string
     */ 
    public function getAttrUnit()
    {
        return $this->attrUnit;
    }

    /**
     * Set attribute type
     *
     * @param  string  $attrUnit  Attribute type
     *
     * @return  self
     */ 
    public function setAttrUnit(string $attrUnit = null)
    {
        $this->attrUnit = $attrUnit;

        return $this;
    }
}
