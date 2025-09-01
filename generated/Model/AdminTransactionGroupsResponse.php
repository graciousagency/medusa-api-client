<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTransactionGroupsResponse extends \ArrayObject
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
     * The maximum number of transaction groups to return.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of transaction groups to skip before retrieving the results.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of transaction groups available.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of transaction groups.
     *
     * @var list<AdminTransactionGroup>|null
     */
    protected $transactionGroups;
    /**
     * The transaction group's estimate count.
     *
     * @var float|null
     */
    protected $estimateCount;
    /**
     * The maximum number of transaction groups to return.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of transaction groups to return.
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
     * The number of transaction groups to skip before retrieving the results.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of transaction groups to skip before retrieving the results.
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
     * The total number of transaction groups available.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of transaction groups available.
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
     * The list of transaction groups.
     *
     * @return list<AdminTransactionGroup>|null
     */
    public function getTransactionGroups(): ?array
    {
        return $this->transactionGroups;
    }
    /**
     * The list of transaction groups.
     *
     * @param list<AdminTransactionGroup>|null $transactionGroups
     *
     * @return self
     */
    public function setTransactionGroups(?array $transactionGroups): self
    {
        $this->initialized['transactionGroups'] = true;
        $this->transactionGroups = $transactionGroups;
        return $this;
    }
    /**
     * The transaction group's estimate count.
     *
     * @return float|null
     */
    public function getEstimateCount(): ?float
    {
        return $this->estimateCount;
    }
    /**
     * The transaction group's estimate count.
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