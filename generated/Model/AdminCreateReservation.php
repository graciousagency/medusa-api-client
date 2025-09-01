<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateReservation extends \ArrayObject
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
     * The ID of the line item this reservation is created for.
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
     * The ID of the inventory item associated with the line item's variant.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The reserved quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The reservation's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The reservation's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the line item this reservation is created for.
     *
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }
    /**
     * The ID of the line item this reservation is created for.
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
     * The ID of the inventory item associated with the line item's variant.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item associated with the line item's variant.
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
     * The reserved quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The reserved quantity.
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
     * The reservation's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The reservation's metadata, used to store custom key-value pairs.
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