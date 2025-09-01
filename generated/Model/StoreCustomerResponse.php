<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCustomerResponse extends \ArrayObject
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
     * The customer's details.
     *
     * @var StoreCustomer|null
     */
    protected $customer;
    /**
     * The customer's details.
     *
     * @return StoreCustomer|null
     */
    public function getCustomer(): ?StoreCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param StoreCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?StoreCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
}