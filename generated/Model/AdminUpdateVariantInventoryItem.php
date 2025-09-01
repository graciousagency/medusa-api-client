<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateVariantInventoryItem extends \ArrayObject
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