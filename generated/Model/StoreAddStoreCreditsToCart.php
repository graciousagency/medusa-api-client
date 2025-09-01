<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreAddStoreCreditsToCart extends \ArrayObject
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
     * The amount of store credits to add to the cart.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The amount of store credits to add to the cart.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The amount of store credits to add to the cart.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}