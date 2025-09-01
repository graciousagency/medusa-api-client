<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersGetResponse200 extends \ArrayObject
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
     * The number of items skipped before the returned items.
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
     * The list of orders.
     *
     * @var list<AdminOrder>|null
     */
    protected $orders;
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
     * The number of items skipped before the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of items skipped before the returned items.
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
     * The list of orders.
     *
     * @return list<AdminOrder>|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }
    /**
     * The list of orders.
     *
     * @param list<AdminOrder>|null $orders
     *
     * @return self
     */
    public function setOrders(?array $orders): self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;
        return $this;
    }
}