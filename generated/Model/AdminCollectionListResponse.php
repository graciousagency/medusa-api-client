<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCollectionListResponse extends \ArrayObject
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
     * The maximum number of items returned.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of items skipped before retrieving the returned results.
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
     * The list of product collections.
     *
     * @var list<AdminCollection>|null
     */
    protected $collections;
    /**
     * The estimated count retrieved from the PostgreSQL query planner, which may be inaccurate.
     *
     * @var float|null
     */
    protected $estimateCount;
    /**
     * The maximum number of items returned.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of items returned.
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
     * The number of items skipped before retrieving the returned results.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items skipped before retrieving the returned results.
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
     * The list of product collections.
     *
     * @return list<AdminCollection>|null
     */
    public function getCollections(): ?array
    {
        return $this->collections;
    }
    /**
     * The list of product collections.
     *
     * @param list<AdminCollection>|null $collections
     *
     * @return self
     */
    public function setCollections(?array $collections): self
    {
        $this->initialized['collections'] = true;
        $this->collections = $collections;
        return $this;
    }
    /**
     * The estimated count retrieved from the PostgreSQL query planner, which may be inaccurate.
     *
     * @return float|null
     */
    public function getEstimateCount(): ?float
    {
        return $this->estimateCount;
    }
    /**
     * The estimated count retrieved from the PostgreSQL query planner, which may be inaccurate.
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