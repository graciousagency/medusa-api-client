<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateProductVariantInventoryKit extends \ArrayObject
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
     * The inventory item's ID.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The number of units a single quantity is equivalent to. For example, if a customer orders one quantity of the variant, Medusa checks the availability of the quantity multiplied by the value set for `required_quantity`. When the customer orders the quantity, Medusa reserves the ordered quantity multiplied by the value set for `required_quantity`.
     *
     * @var float|null
     */
    protected $requiredQuantity;
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
    /**
     * The number of units a single quantity is equivalent to. For example, if a customer orders one quantity of the variant, Medusa checks the availability of the quantity multiplied by the value set for `required_quantity`. When the customer orders the quantity, Medusa reserves the ordered quantity multiplied by the value set for `required_quantity`.
     *
     * @return float|null
     */
    public function getRequiredQuantity(): ?float
    {
        return $this->requiredQuantity;
    }
    /**
     * The number of units a single quantity is equivalent to. For example, if a customer orders one quantity of the variant, Medusa checks the availability of the quantity multiplied by the value set for `required_quantity`. When the customer orders the quantity, Medusa reserves the ordered quantity multiplied by the value set for `required_quantity`.
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
}