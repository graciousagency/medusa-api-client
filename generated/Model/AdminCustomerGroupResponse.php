<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomerGroupResponse extends \ArrayObject
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
     * The customer group's details.
     *
     * @var AdminCustomerGroup|null
     */
    protected $customerGroup;
    /**
     * The customer group's details.
     *
     * @return AdminCustomerGroup|null
     */
    public function getCustomerGroup(): ?AdminCustomerGroup
    {
        return $this->customerGroup;
    }
    /**
     * The customer group's details.
     *
     * @param AdminCustomerGroup|null $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(?AdminCustomerGroup $customerGroup): self
    {
        $this->initialized['customerGroup'] = true;
        $this->customerGroup = $customerGroup;
        return $this;
    }
}