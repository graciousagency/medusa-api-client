<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCustomerAddressResponse extends \ArrayObject
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
     * The customer address's details
     *
     * @var StoreCustomerAddress|null
     */
    protected $address;
    /**
     * The customer address's details
     *
     * @return StoreCustomerAddress|null
     */
    public function getAddress(): ?StoreCustomerAddress
    {
        return $this->address;
    }
    /**
     * The customer address's details
     *
     * @param StoreCustomerAddress|null $address
     *
     * @return self
     */
    public function setAddress(?StoreCustomerAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}