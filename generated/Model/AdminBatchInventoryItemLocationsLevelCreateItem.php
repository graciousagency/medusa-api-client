<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchInventoryItemLocationsLevelCreateItem extends \ArrayObject
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
     * The ID of the associated location.
     *
     * @var string|null
     */
    protected $locationId;
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
     * The ID of the associated location.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the associated location.
     *
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
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