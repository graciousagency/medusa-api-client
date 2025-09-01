<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionResponse extends \ArrayObject
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
     * @var AdminShippingOption|null
     */
    protected $shippingOption;
    /**
     * The shipping option's details.
     *
     * @return AdminShippingOption|null
     */
    public function getShippingOption(): ?AdminShippingOption
    {
        return $this->shippingOption;
    }
    /**
     * The shipping option's details.
     *
     * @param AdminShippingOption|null $shippingOption
     *
     * @return self
     */
    public function setShippingOption(?AdminShippingOption $shippingOption): self
    {
        $this->initialized['shippingOption'] = true;
        $this->shippingOption = $shippingOption;
        return $this;
    }
}