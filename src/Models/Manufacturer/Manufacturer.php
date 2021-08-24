<?php

namespace Composite\TecDoc\Models\Manufacturer;

class Manufacturer
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
}
