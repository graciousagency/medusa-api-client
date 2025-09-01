<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomerResponse extends \ArrayObject
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
     * @var AdminCustomer|null
     */
    protected $customer;
    /**
     * The customer's details.
     *
     * @return AdminCustomer|null
     */
    public function getCustomer(): ?AdminCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param AdminCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?AdminCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
}