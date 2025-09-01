<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRegionResponse extends \ArrayObject
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
     * The tax region's details.
     *
     * @var AdminTaxRegion|null
     */
    protected $taxRegion;
    /**
     * The tax region's details.
     *
     * @return AdminTaxRegion|null
     */
    public function getTaxRegion(): ?AdminTaxRegion
    {
        return $this->taxRegion;
    }
    /**
     * The tax region's details.
     *
     * @param AdminTaxRegion|null $taxRegion
     *
     * @return self
     */
    public function setTaxRegion(?AdminTaxRegion $taxRegion): self
    {
        $this->initialized['taxRegion'] = true;
        $this->taxRegion = $taxRegion;
        return $this;
    }
}