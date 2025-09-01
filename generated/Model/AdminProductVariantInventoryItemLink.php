<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantInventoryItemLink extends \ArrayObject
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
     * The ID of the association.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The associated product variant's ID.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $variant;
    /**
     * The associated inventory item's ID.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The inventory item's details.
     *
     * @var AdminInventoryItem|null
     */
    protected $inventory;
    /**
     * The ID of the association.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The ID of the association.
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
     * The associated product variant's ID.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The associated product variant's ID.
     *
     * @param string|null $variantId
     *
     * @return self
     */
    public function setVariantId(?string $variantId): self
    {
        $this->initialized['variantId'] = true;
        $this->variantId = $variantId;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getVariant(): ?iterable
    {
        return $this->variant;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $variant
     *
     * @return self
     */
    public function setVariant(?iterable $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
    /**
     * The associated inventory item's ID.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The associated inventory item's ID.
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
    public function getInventory(): ?AdminInventoryItem
    {
        return $this->inventory;
    }
    /**
     * The inventory item's details.
     *
     * @param AdminInventoryItem|null $inventory
     *
     * @return self
     */
    public function setInventory(?AdminInventoryItem $inventory): self
    {
        $this->initialized['inventory'] = true;
        $this->inventory = $inventory;
        return $this;
    }
}