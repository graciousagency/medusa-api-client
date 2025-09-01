<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreShippingOptionResponse extends \ArrayObject
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
     * The shipping option's details.
     *
     * @var StoreCartShippingOption|null
     */
    protected $shippingOption;
    /**
     * The shipping option's details.
     *
     * @return StoreCartShippingOption|null
     */
    public function getShippingOption(): ?StoreCartShippingOption
    {
        return $this->shippingOption;
    }
    /**
     * The shipping option's details.
     *
     * @param StoreCartShippingOption|null $shippingOption
     *
     * @return self
     */
    public function setShippingOption(?StoreCartShippingOption $shippingOption): self
    {
        $this->initialized['shippingOption'] = true;
        $this->shippingOption = $shippingOption;
        return $this;
    }
}