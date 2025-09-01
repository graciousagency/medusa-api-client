<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPaymentsGetResponse200 extends \ArrayObject
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
     * The maximum number of returned items.
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
     * The total number of payments.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of payments.
     *
     * @var list<AdminPayment>|null
     */
    protected $payments;
    /**
     * The maximum number of returned items.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of returned items.
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
     * The total number of payments.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of payments.
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
     * The list of payments.
     *
     * @return list<AdminPayment>|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }
    /**
     * The list of payments.
     *
     * @param list<AdminPayment>|null $payments
     *
     * @return self
     */
    public function setPayments(?array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
}