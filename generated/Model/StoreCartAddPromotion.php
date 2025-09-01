<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartAddPromotion extends \ArrayObject
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
     * Promotion codes to add to the cart.
     *
     * @var list<string>|null
     */
    protected $promoCodes;
    /**
     * Promotion codes to add to the cart.
     *
     * @return list<string>|null
     */
    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }
    /**
     * Promotion codes to add to the cart.
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