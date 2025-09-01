<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPricePreferenceListResponse extends \ArrayObject
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
     * The number of items skipped before retrieving the returned items.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total count of items.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of price preferences.
     *
     * @var list<AdminPricePreference>|null
     */
    protected $pricePreferences;
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
     * The total count of items.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total count of items.
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
     * The list of price preferences.
     *
     * @return list<AdminPricePreference>|null
     */
    public function getPricePreferences(): ?array
    {
        return $this->pricePreferences;
    }
    /**
     * The list of price preferences.
     *
     * @param list<AdminPricePreference>|null $pricePreferences
     *
     * @return self
     */
    public function setPricePreferences(?array $pricePreferences): self
    {
        $this->initialized['pricePreferences'] = true;
        $this->pricePreferences = $pricePreferences;
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