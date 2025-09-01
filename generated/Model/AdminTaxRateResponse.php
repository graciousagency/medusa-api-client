<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRateResponse extends \ArrayObject
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
     * The tax rate's details.
     *
     * @var AdminTaxRate|null
     */
    protected $taxRate;
    /**
     * The tax rate's details.
     *
     * @return AdminTaxRate|null
     */
    public function getTaxRate(): ?AdminTaxRate
    {
        return $this->taxRate;
    }
    /**
     * The tax rate's details.
     *
     * @param AdminTaxRate|null $taxRate
     *
     * @return self
     */
    public function setTaxRate(?AdminTaxRate $taxRate): self
    {
        $this->initialized['taxRate'] = true;
        $this->taxRate = $taxRate;
        return $this;
    }
}