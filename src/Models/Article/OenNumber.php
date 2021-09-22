<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class OenNumber extends Model
{
    
    /**
     * OenNumber blockNumber
     *
     * @var int
     */
    public ?int $blockNumber;
    
    /**
     * OenNumber brandName
     *
     * @var string
     */
    public ?string $brandName;
    
    /**
     * OenNumber oeNumber
     *
     * @var string
     */
    public ?string $oeNumber;
    
    /**
     * OenNumber sortNumber
     *
     * @var int
     */
    public ?int $sortNumber;

    /**
     * Get oenNumber sortNumber
     *
     * @return  int
     */ 
    public function getSortNumber()
    {
        return $this->sortNumber;
    }

    /**
     * Set oenNumber sortNumber
     *
     * @param  int  $sortNumber  OenNumber sortNumber
     *
     * @return  self
     */ 
    public function setSortNumber(int $sortNumber = null)
    {
        $this->sortNumber = $sortNumber;

        return $this;
    }

    /**
     * Get oenNumber oeNumber
     *
     * @return  string
     */ 
    public function getOeNumber()
    {
        return $this->oeNumber;
    }

    /**
     * Set oenNumber oeNumber
     *
     * @param  string  $oeNumber  OenNumber oeNumber
     *
     * @return  self
     */ 
    public function setOeNumber(string $oeNumber = null)
    {
        $this->oeNumber = $oeNumber;

        return $this;
    }

    /**
     * Get oenNumber brandName
     *
     * @return  string
     */ 
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set oenNumber brandName
     *
     * @param  string  $brandName  OenNumber brandName
     *
     * @return  self
     */ 
    public function setBrandName(string $brandName = null)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get oenNumber blockNumber
     *
     * @return  int
     */ 
    public function getBlockNumber()
    {
        return $this->blockNumber;
    }

    /**
     * Set oenNumber blockNumber
     *
     * @param  int  $blockNumber  OenNumber blockNumber
     *
     * @return  self
     */ 
    public function setBlockNumber(int $blockNumber = null)
    {
        $this->blockNumber = $blockNumber;

        return $this;
    }
}
