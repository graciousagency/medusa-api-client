<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInventoryLevel extends \ArrayObject
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
     * The location level's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The location level's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The location level's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The location level's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The location level's inventory item id.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The location level's location id.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The location level's stocked quantity.
     *
     * @var float|null
     */
    protected $stockedQuantity;
    /**
     * The location level's reserved quantity.
     *
     * @var float|null
     */
    protected $reservedQuantity;
    /**
     * The location level's incoming quantity.
     *
     * @var float|null
     */
    protected $incomingQuantity;
    /**
     * The location level's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $inventoryItem;
    /**
     * The location level's available quantity.
     *
     * @var float|null
     */
    protected $availableQuantity;
    /**
     * The location level's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The location level's ID.
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
     * The location level's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The location level's created at.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The location level's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The location level's updated at.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The location level's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The location level's deleted at.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * The location level's inventory item id.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The location level's inventory item id.
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
     * The location level's location id.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The location level's location id.
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
     * The location level's stocked quantity.
     *
     * @return float|null
     */
    public function getStockedQuantity(): ?float
    {
        return $this->stockedQuantity;
    }
    /**
     * The location level's stocked quantity.
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
     * The location level's reserved quantity.
     *
     * @return float|null
     */
    public function getReservedQuantity(): ?float
    {
        return $this->reservedQuantity;
    }
    /**
     * The location level's reserved quantity.
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
     * The location level's incoming quantity.
     *
     * @return float|null
     */
    public function getIncomingQuantity(): ?float
    {
        return $this->incomingQuantity;
    }
    /**
     * The location level's incoming quantity.
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
     * The location level's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The location level's metadata.
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
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getInventoryItem(): ?iterable
    {
        return $this->inventoryItem;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $inventoryItem
     *
     * @return self
     */
    public function setInventoryItem(?iterable $inventoryItem): self
    {
        $this->initialized['inventoryItem'] = true;
        $this->inventoryItem = $inventoryItem;
        return $this;
    }
    /**
     * The location level's available quantity.
     *
     * @return float|null
     */
    public function getAvailableQuantity(): ?float
    {
        return $this->availableQuantity;
    }
    /**
     * The location level's available quantity.
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
}