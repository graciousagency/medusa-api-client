<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStoreCreditAccountsResponse extends \ArrayObject
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
     * The maximum number of store credit accounts to return.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of store credit accounts to skip before retrieving the results.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of store credit accounts available.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of store credit accounts.
     *
     * @var list<AdminStoreCreditAccount>|null
     */
    protected $storeCreditAccounts;
    /**
     * The store credit account's estimate count.
     *
     * @var float|null
     */
    protected $estimateCount;
    /**
     * The maximum number of store credit accounts to return.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of store credit accounts to return.
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
     * The number of store credit accounts to skip before retrieving the results.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of store credit accounts to skip before retrieving the results.
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
     * The total number of store credit accounts available.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of store credit accounts available.
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
     * The list of store credit accounts.
     *
     * @return list<AdminStoreCreditAccount>|null
     */
    public function getStoreCreditAccounts(): ?array
    {
        return $this->storeCreditAccounts;
    }
    /**
     * The list of store credit accounts.
     *
     * @param list<AdminStoreCreditAccount>|null $storeCreditAccounts
     *
     * @return self
     */
    public function setStoreCreditAccounts(?array $storeCreditAccounts): self
    {
        $this->initialized['storeCreditAccounts'] = true;
        $this->storeCreditAccounts = $storeCreditAccounts;
        return $this;
    }
    /**
     * The store credit account's estimate count.
     *
     * @return float|null
     */
    public function getEstimateCount(): ?float
    {
        return $this->estimateCount;
    }
    /**
     * The store credit account's estimate count.
     *
     * @param float|null $estimateCount
     *
     * @return self
     */
    public function setEstimateCount(?float $estimateCount): self
    {
        $this->initialized['estimateCount'] = true;
        $this->estimateCount = $estimateCount;
        return $this;
    }
}