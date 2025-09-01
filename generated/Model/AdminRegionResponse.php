<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRegionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The region's details.
     *
     * @var AdminRegion|null
     */
    protected $region;
    /**
     * The region's details.
     *
     * @return AdminRegion|null
     */
    public function getRegion(): ?AdminRegion
    {
        return $this->region;
    }
    /**
     * The region's details.
     *
     * @param AdminRegion|null $region
     *
     * @return self
     */
    public function setRegion(?AdminRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
}