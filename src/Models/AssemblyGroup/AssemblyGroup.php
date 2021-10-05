<?php

namespace Composite\TecDoc\Models\AssemblyGroup;

use Composite\TecDoc\Models\Model;

class AssemblyGroup extends Model
{
    /**
     * Assembly Group Name
     *
     * @var string
     */
    public ?string $assemblyGroupName; //"Érzékelők",    

    /**
     * Assembly Group node ID
     *
     * @var int
     */
    public ?int $assemblyGroupNodeId; //102747,

    /**
     * Assembly Group has children or not
     *
     * @var bool
     */
    public ?bool $hasChilds; //false,

    /**
     * Assembly Group parent's id
     *
     * @var int
     */
    public ?int $parentNodeId; //100010,

    /**
     * Assembly Group children
     *
     * @var array
     */
    public ?array $children;


    /**
     * Get assembly Group Name
     *
     * @return  string
     */ 
    public function getAssemblyGroupName()
    {
        return $this->assemblyGroupName;
    }

    /**
     * Set assembly Group Name
     *
     * @param  string  $assemblyGroupName  Assembly Group Name
     *
     * @return  self
     */ 
    public function setAssemblyGroupName(string $assemblyGroupName = null)
    {
        $this->assemblyGroupName = $assemblyGroupName;

        return $this;
    }

    /**
     * Get assembly Group node ID
     *
     * @return  int
     */ 
    public function getAssemblyGroupNodeId()
    {
        return $this->assemblyGroupNodeId;
    }

    /**
     * Set assembly Group node ID
     *
     * @param  int  $assemblyGroupNodeId  Assembly Group node ID
     *
     * @return  self
     */ 
    public function setAssemblyGroupNodeId(int $assemblyGroupNodeId = null)
    {
        $this->assemblyGroupNodeId = $assemblyGroupNodeId;

        return $this;
    }

    /**
     * Get assembly Group has children or not
     *
     * @return  bool
     */ 
    public function getHasChilds()
    {
        return $this->hasChilds;
    }

    /**
     * Set assembly Group has children or not
     *
     * @param  bool  $hasChilds  Assembly Group has children or not
     *
     * @return  self
     */ 
    public function setHasChilds(bool $hasChilds = null)
    {
        $this->hasChilds = $hasChilds;

        return $this;
    }

    /**
     * Get assembly Group parent's id
     *
     * @return  int
     */ 
    public function getParentNodeId()
    {
        return $this->parentNodeId;
    }

    /**
     * Set assembly Group parent's id
     *
     * @param  int  $parentNodeId  Assembly Group parent's id
     *
     * @return  self
     */ 
    public function setParentNodeId(int $parentNodeId = null)
    {
        $this->parentNodeId = $parentNodeId;

        return $this;
    }

    /**
     * Get assembly Group children
     *
     * @return  array
     */ 
    public function getChlidren()
    {
        return $this->chlidren;
    }

    /**
     * Set assembly Group children
     *
     * @param  array  $chlidren  Assembly Group children
     *
     * @return  self
     */ 
    public function setChlidren(array $children = null)
    {
        $this->children = $children;
        return $this;
    }
}
