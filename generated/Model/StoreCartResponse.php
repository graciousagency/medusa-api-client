<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartResponse extends \ArrayObject
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
     * The cart's details.
     *
     * @var StoreCart|null
     */
    protected $cart;
    /**
     * The cart's details.
     *
     * @return StoreCart|null
     */
    public function getCart(): ?StoreCart
    {
        return $this->cart;
    }
    /**
     * The cart's details.
     *
     * @param StoreCart|null $cart
     *
     * @return self
     */
    public function setCart(?StoreCart $cart): self
    {
        $this->initialized['cart'] = true;
        $this->cart = $cart;
        return $this;
    }
}