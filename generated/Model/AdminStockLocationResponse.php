<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStockLocationResponse extends \ArrayObject
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
     * The stock location's details.
     *
     * @var AdminStockLocation|null
     */
    protected $stockLocation;
    /**
     * The stock location's details.
     *
     * @return AdminStockLocation|null
     */
    public function getStockLocation(): ?AdminStockLocation
    {
        return $this->stockLocation;
    }
    /**
     * The stock location's details.
     *
     * @param AdminStockLocation|null $stockLocation
     *
     * @return self
     */
    public function setStockLocation(?AdminStockLocation $stockLocation): self
    {
        $this->initialized['stockLocation'] = true;
        $this->stockLocation = $stockLocation;
        return $this;
    }
}