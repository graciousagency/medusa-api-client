<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomersIdCustomerGroupsPostBody extends \ArrayObject
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
     * The customer groups to add the customer to.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The customer groups to remove the customer from.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The customer groups to add the customer to.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The customer groups to add the customer to.
     *
     * @param list<string>|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * The customer groups to remove the customer from.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The customer groups to remove the customer from.
     *
     * @param list<string>|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}