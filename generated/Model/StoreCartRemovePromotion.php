<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartRemovePromotion extends \ArrayObject
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
     * The promotion code to remove from the cart.
     *
     * @var list<string>|null
     */
    protected $promoCodes;
    /**
     * The promotion code to remove from the cart.
     *
     * @return list<string>|null
     */
    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }
    /**
     * The promotion code to remove from the cart.
     *
     * @param list<string>|null $promoCodes
     *
     * @return self
     */
    public function setPromoCodes(?array $promoCodes): self
    {
        $this->initialized['promoCodes'] = true;
        $this->promoCodes = $promoCodes;
        return $this;
    }
}