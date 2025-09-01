<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateInventoryLocationLevel extends \ArrayObject
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
     * The inventory level's stocked quantity.
     *
     * @var float|null
     */
    protected $stockedQuantity;
    /**
     * The inventory level's incoming quantity.
     *
     * @var float|null
     */
    protected $incomingQuantity;
    /**
     * The inventory level's stocked quantity.
     *
     * @return float|null
     */
    public function getStockedQuantity(): ?float
    {
        return $this->stockedQuantity;
    }
    /**
     * The inventory level's stocked quantity.
     *
     * @param float|null $stockedQuantity
     *
     * @return self
     */
    public function setStockedQuantity(?float $stockedQuantity): self
    {
        $this->initialized['stockedQuantity'] = true;
        $this->stockedQuantity = $stockedQuantity;
        return $this;
    }
    /**
     * The inventory level's incoming quantity.
     *
     * @return float|null
     */
    public function getIncomingQuantity(): ?float
    {
        return $this->incomingQuantity;
    }
    /**
     * The inventory level's incoming quantity.
     *
     * @param float|null $incomingQuantity
     *
     * @return self
     */
    public function setIncomingQuantity(?float $incomingQuantity): self
    {
        $this->initialized['incomingQuantity'] = true;
        $this->incomingQuantity = $incomingQuantity;
        return $this;
    }
}