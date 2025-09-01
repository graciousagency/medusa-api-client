<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantInventoryLinkInventory extends \ArrayObject
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
     * The ID of the inventory item.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The ID of the inventory item.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item.
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