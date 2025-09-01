<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomersGetResponse200 extends \ArrayObject
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
     * The maximum number of items returned in the list.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of items skipped before retrieving the returned items.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of items.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The customer's details.
     *
     * @var AdminCustomer|null
     */
    protected $customers;
    /**
     * The maximum number of items returned in the list.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of items returned in the list.
     *
     * @param float|null $limit
     *
     * @return self
     */
    public function setLimit(?float $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The number of items skipped before retrieving the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items skipped before retrieving the returned items.
     *
     * @param float|null $offset
     *
     * @return self
     */
    public function setOffset(?float $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
    /**
     * The total number of items.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of items.
     *
     * @param float|null $count
     *
     * @return self
     */
    public function setCount(?float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * The customer's details.
     *
     * @return AdminCustomer|null
     */
    public function getCustomers(): ?AdminCustomer
    {
        return $this->customers;
    }
    /**
     * The customer's details.
     *
     * @param AdminCustomer|null $customers
     *
     * @return self
     */
    public function setCustomers(?AdminCustomer $customers): self
    {
        $this->initialized['customers'] = true;
        $this->customers = $customers;
        return $this;
    }
}