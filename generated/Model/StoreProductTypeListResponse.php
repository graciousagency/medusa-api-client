<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductTypeListResponse extends \ArrayObject
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
     * The number of items to skip before retrieving the returned items.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of items available.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of product types.
     *
     * @var list<StoreProductType>|null
     */
    protected $productTypes;
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
     * The number of items to skip before retrieving the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items to skip before retrieving the returned items.
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
     * The total number of items available.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of items available.
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
     * The list of product types.
     *
     * @return list<StoreProductType>|null
     */
    public function getProductTypes(): ?array
    {
        return $this->productTypes;
    }
    /**
     * The list of product types.
     *
     * @param list<StoreProductType>|null $productTypes
     *
     * @return self
     */
    public function setProductTypes(?array $productTypes): self
    {
        $this->initialized['productTypes'] = true;
        $this->productTypes = $productTypes;
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