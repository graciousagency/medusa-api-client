<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReservation extends \ArrayObject
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
     * The reservation's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the line item this reservation is for.
     *
     * @var string|null
     */
    protected $lineItemId;
    /**
     * The ID of the location the quantity is reserved from.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The reservation's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * An ID in an external system
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * The reservation's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The ID of the inventory item this reservation is associated with.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The inventory item's details.
     *
     * @var AdminInventoryItem|null
     */
    protected $inventoryItem;
    /**
     * The reservation's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the user that created this reservation.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date this reservation was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The date this reservation was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date this reservation was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The reservation's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The reservation's ID.
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
     * The ID of the line item this reservation is for.
     *
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }
    /**
     * The ID of the line item this reservation is for.
     *
     * @param string|null $lineItemId
     *
     * @return self
     */
    public function setLineItemId(?string $lineItemId): self
    {
        $this->initialized['lineItemId'] = true;
        $this->lineItemId = $lineItemId;
        return $this;
    }
    /**
     * The ID of the location the quantity is reserved from.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location the quantity is reserved from.
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
     * The reservation's quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The reservation's quantity.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * An ID in an external system
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * An ID in an external system
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * The reservation's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The reservation's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The ID of the inventory item this reservation is associated with.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item this reservation is associated with.
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
     * The inventory item's details.
     *
     * @return AdminInventoryItem|null
     */
    public function getInventoryItem(): ?AdminInventoryItem
    {
        return $this->inventoryItem;
    }
    /**
     * The inventory item's details.
     *
     * @param AdminInventoryItem|null $inventoryItem
     *
     * @return self
     */
    public function setInventoryItem(?AdminInventoryItem $inventoryItem): self
    {
        $this->initialized['inventoryItem'] = true;
        $this->inventoryItem = $inventoryItem;
        return $this;
    }
    /**
     * The reservation's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The reservation's metadata, can hold custom key-value pairs.
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
     * The ID of the user that created this reservation.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created this reservation.
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The date this reservation was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date this reservation was deleted.
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
     * The date this reservation was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date this reservation was created.
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
     * The date this reservation was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date this reservation was updated.
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
}