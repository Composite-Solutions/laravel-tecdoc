<?php

namespace Composite\TecDoc\Models\Article;

use Composite\TecDoc\Models\Model;

class UsageNumber extends Model
{
    /**
     * Display immediate attribute
     *
     * @var bool
     */
    public ?bool $displayImmediate; // true,

    /**
     * Usage number attribute
     *
     * @var string
     */
    public ?string $usageNumber; // "971-FP",

    /**
     * Get display immediate attribute
     *
     * @return  bool
     */ 
    public function getDisplayImmediate()
    {
        return $this->displayImmediate;
    }

    /**
     * Set display immediate attribute
     *
     * @param  bool  $displayImmediate display immediate attribute
     *
     * @return  self
     */ 
    public function setDisplayImmediate(bool $displayImmediate)
    {
        $this->displayImmediate = $displayImmediate;

        return $this;
    }

    /**
     * Get usage number
     *
     * @return  string
     */ 
    public function getUsageNumber()
    {
        return $this->thumbFileName;
    }

    /**
     * Set usage number
     *
     * @param  string  $usageNumber usage number attribute
     *
     * @return  self
     */ 
    public function setUsageNumber(string $usageNumber)
    {
        $this->usageNumber = $usageNumber;

        return $this;
    }

}
