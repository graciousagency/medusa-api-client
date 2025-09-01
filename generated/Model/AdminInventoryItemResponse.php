<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInventoryItemResponse extends \ArrayObject
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
     * The inventory item's details.
     *
     * @var AdminInventoryItem|null
     */
    protected $inventoryItem;
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
}