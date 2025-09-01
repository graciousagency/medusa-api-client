<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateVariantInventoryItem extends \ArrayObject
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
     * The quantity of the variant in the inventory item.
     *
     * @var float|null
     */
    protected $requiredQuantity;
    /**
     * The inventory item's ID.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The quantity of the variant in the inventory item.
     *
     * @return float|null
     */
    public function getRequiredQuantity(): ?float
    {
        return $this->requiredQuantity;
    }
    /**
     * The quantity of the variant in the inventory item.
     *
     * @param float|null $requiredQuantity
     *
     * @return self
     */
    public function setRequiredQuantity(?float $requiredQuantity): self
    {
        $this->initialized['requiredQuantity'] = true;
        $this->requiredQuantity = $requiredQuantity;
        return $this;
    }
    /**
     * The inventory item's ID.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The inventory item's ID.
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
}