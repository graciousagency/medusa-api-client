<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxProvidersGetResponse200 extends \ArrayObject
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
     * The maximum number of items retrieved.
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
     * The total number of items available.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The estimated count retrieved from the PostgreSQL query planner, which may be inaccurate.
     *
     * @var float|null
     */
    protected $estimateCount;
    /**
     * The list of tax providers.
     *
     * @var list<AdminTaxProvider>|null
     */
    protected $taxProviders;
    /**
     * The maximum number of items retrieved.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of items retrieved.
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
    /**
     * The list of tax providers.
     *
     * @return list<AdminTaxProvider>|null
     */
    public function getTaxProviders(): ?array
    {
        return $this->taxProviders;
    }
    /**
     * The list of tax providers.
     *
     * @param list<AdminTaxProvider>|null $taxProviders
     *
     * @return self
     */
    public function setTaxProviders(?array $taxProviders): self
    {
        $this->initialized['taxProviders'] = true;
        $this->taxProviders = $taxProviders;
        return $this;
    }
}