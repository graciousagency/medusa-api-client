<?php

namespace Gracious\MedusaApiClientBundle\Model;

class InventoryLevel extends \ArrayObject
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
     * The inventory level's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the associated inventory item.
     *
     * @var string|null
     */
    protected $inventoryItemId;
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
     * The inventory level's reserved quantity.
     *
     * @var float|null
     */
    protected $reservedQuantity;
    /**
     * The inventory level's available quantity.
     *
     * @var float|null
     */
    protected $availableQuantity;
    /**
     * The inventory level's incoming quantity.
     *
     * @var float|null
     */
    protected $incomingQuantity;
    /**
     * The inventory level's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The inventory level's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The inventory level's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The ID of the associated inventory item.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the associated inventory item.
     *
     * @param string|null $inventoryItemId
     *
     * @return self
     */
    public function setInventoryItemId(?string $inventoryItemId): self
    {
        $this->initialized['inventoryItemId'] = true;
        $this->inventoryItemId = $inventoryItemId;
        return $this;
    }
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
     * The inventory level's reserved quantity.
     *
     * @return float|null
     */
    public function getReservedQuantity(): ?float
    {
        return $this->reservedQuantity;
    }
    /**
     * The inventory level's reserved quantity.
     *
     * @param float|null $reservedQuantity
     *
     * @return self
     */
    public function setReservedQuantity(?float $reservedQuantity): self
    {
        $this->initialized['reservedQuantity'] = true;
        $this->reservedQuantity = $reservedQuantity;
        return $this;
    }
    /**
     * The inventory level's available quantity.
     *
     * @return float|null
     */
    public function getAvailableQuantity(): ?float
    {
        return $this->availableQuantity;
    }
    /**
     * The inventory level's available quantity.
     *
     * @param float|null $availableQuantity
     *
     * @return self
     */
    public function setAvailableQuantity(?float $availableQuantity): self
    {
        $this->initialized['availableQuantity'] = true;
        $this->availableQuantity = $availableQuantity;
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
    /**
     * The inventory level's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The inventory level's metadata, can hold custom key-value pairs.
     *
     * @param array<string, mixed>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}