<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminSalesChannelsGetResponse200 extends \ArrayObject
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
     * The total number of items.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of sales channels.
     *
     * @var list<AdminSalesChannel>|null
     */
    protected $salesChannels;
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
     * The list of sales channels.
     *
     * @return list<AdminSalesChannel>|null
     */
    public function getSalesChannels(): ?array
    {
        return $this->salesChannels;
    }
    /**
     * The list of sales channels.
     *
     * @param list<AdminSalesChannel>|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
}