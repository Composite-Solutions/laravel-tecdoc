<?php

namespace Composite\TecDoc\Models\Manufacturer;

use Composite\TecDoc\Models\Model;

class Manufacturer extends Model
{    
    /**
     * Manufacturer ID
     *
     * @var int
     */
    public int $manuId;
    
    /**
     * Manufacturer name
     *
     * @var string
     */
    public string $manuName;

    /**
     * LinkingTarget types
     *
     * @var string
     */
    public string $linkingTargetTypes;

    /**
     * Most popular manufacturers
     *
     * @var int
     */
    public int $favorFlag;
        
    /**
     * Get manufacturer ID
     *
     * @return int
     */
    public function getManuId() : int
    {
        return $this->manuId;
    }    
    
    /**
     * Set manufacturer ID
     *
     * @param  int $manuId
     * @return void
     */
    public function setManuId(int $manuId)
    {
        $this->manuId = $manuId;
    }    

    /**
     * Get manufacturer name
     *
     * @return string
     */
    public function getManuName() : string
    {
        return $this->manuName;
    }    

    /**
     * Set manufacturer name
     *
     * @param  string $manuName
     * @return void
     */
    public function setManuName(string $manuName)
    {
        $this->manuName = $manuName;
    }

    /**
     * Get linkingTarget types
     *
     * @return  string
     */ 
    public function getLinkingTargetTypes()
    {
        return $this->linkingTargetTypes;
    }

    /**
     * Set linkingTarget types
     *
     * @param  string  $linkingTargetTypes  LinkingTarget types
     *
     * @return  self
     */ 
    public function setLinkingTargetTypes(string $linkingTargetTypes)
    {
        $this->linkingTargetTypes = $linkingTargetTypes;
    }

    /**
     * Get most popular manufacturers
     *
     * @return  int
     */ 
    public function getFavorFlag()
    {
        return $this->favorFlag;
    }

    /**
     * Set most popular manufacturers
     *
     * @param  int  $favorFlag  Most popular manufacturers
     *
     * @return  self
     */ 
    public function setFavorFlag(int $favorFlag)
    {
        $this->favorFlag = $favorFlag;
    }
}
