<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomerAddressResponse extends \ArrayObject
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
     * The customer's address.
     *
     * @var AdminCustomerAddress|null
     */
    protected $address;
    /**
     * The customer's address.
     *
     * @return AdminCustomerAddress|null
     */
    public function getAddress(): ?AdminCustomerAddress
    {
        return $this->address;
    }
    /**
     * The customer's address.
     *
     * @param AdminCustomerAddress|null $address
     *
     * @return self
     */
    public function setAddress(?AdminCustomerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}