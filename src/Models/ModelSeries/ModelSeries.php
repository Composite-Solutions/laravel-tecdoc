<?php

namespace Composite\TecDoc\Models\ModelSeries;

use Composite\TecDoc\Models\Model;

class ModelSeries extends Model
{
    /**
     * Model ID
     *
     * @var int
     */
    public ?int $modelId; //5114, 

    /**
     * Model name
     *
     * @var string
     */
    public ?string $modelname; //1 (E81)",    
    
    /**
     * Year of construction from
     *
     * @var int
     */
    public ?int $yearOfConstrFrom; //200609,    

    /**
     * Year of construction to
     *
     * @var int
     */
    public ?int $yearOfConstrTo; //201209,    

    /**
     * Get model ID
     *
     * @return  int
     */ 
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set model ID
     *
     * @param  int  $modelId  Model ID
     *
     * @return  self
     */ 
    public function setModelId(int $modelId = null)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get model name
     *
     * @return  string
     */ 
    public function getModelname()
    {
        return $this->modelname;
    }

    /**
     * Set model name
     *
     * @param  string  $modelname  Model name
     *
     * @return  self
     */ 
    public function setModelname(string $modelname = null)
    {
        $this->modelname = $modelname;

        return $this;
    }

    /**
     * Get year of construction from
     *
     * @return  int
     */ 
    public function getYearOfConstrFrom()
    {
        return $this->yearOfConstrFrom;
    }

    /**
     * Set year of construction from
     *
     * @param  int  $yearOfConstrFrom  Year of construction from
     *
     * @return  self
     */ 
    public function setYearOfConstrFrom(int $yearOfConstrFrom = null)
    {
        $this->yearOfConstrFrom = $yearOfConstrFrom;

        return $this;
    }

    /**
     * Get year of construction to
     *
     * @return  int
     */ 
    public function getYearOfConstrTo()
    {
        return $this->yearOfConstrTo;
    }

    /**
     * Set year of construction to
     *
     * @param  int  $yearOfConstrTo  Year of construction to
     *
     * @return  self
     */ 
    public function setYearOfConstrTo(int $yearOfConstrTo = null)
    {
        $this->yearOfConstrTo = $yearOfConstrTo;

        return $this;
    }
}
