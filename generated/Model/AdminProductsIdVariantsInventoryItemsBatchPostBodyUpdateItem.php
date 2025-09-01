<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem extends \ArrayObject
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
     * The number of units a single quantity is equivalent to. For example, if a customer orders one quantity of the variant, Medusa checks the availability of the quantity multiplied by the value set for `required_quantity`. When the customer orders the quantity, Medusa reserves the ordered quantity multiplied by the value set for `required_quantity`.
     *
     * @var float|null
     */
    protected $requiredQuantity;
    /**
     * The ID of the inventory item the variant is associated with.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The ID of the variant.
     *
     * @var string|null
     */
    protected $variantId;
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
    /**
     * The ID of the inventory item the variant is associated with.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item the variant is associated with.
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
     * The ID of the variant.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The ID of the variant.
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
}