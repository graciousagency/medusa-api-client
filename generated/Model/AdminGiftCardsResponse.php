<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminGiftCardsResponse extends \ArrayObject
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
     * The maximum number of gift cards to return.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The number of gift cards to skip before retrieving the results.
     *
     * @var float|null
     */
    protected $offset;
    /**
     * The total number of gift cards available.
     *
     * @var float|null
     */
    protected $count;
    /**
     * The list of gift cards.
     *
     * @var list<AdminGiftCard>|null
     */
    protected $giftCards;
    /**
     * The gift card's estimate count.
     *
     * @var float|null
     */
    protected $estimateCount;
    /**
     * The maximum number of gift cards to return.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The maximum number of gift cards to return.
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
     * The number of gift cards to skip before retrieving the results.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of gift cards to skip before retrieving the results.
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
     * The total number of gift cards available.
     *
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }
    /**
     * The total number of gift cards available.
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
     * The list of gift cards.
     *
     * @return list<AdminGiftCard>|null
     */
    public function getGiftCards(): ?array
    {
        return $this->giftCards;
    }
    /**
     * The list of gift cards.
     *
     * @param list<AdminGiftCard>|null $giftCards
     *
     * @return self
     */
    public function setGiftCards(?array $giftCards): self
    {
        $this->initialized['giftCards'] = true;
        $this->giftCards = $giftCards;
        return $this;
    }
    /**
     * The gift card's estimate count.
     *
     * @return float|null
     */
    public function getEstimateCount(): ?float
    {
        return $this->estimateCount;
    }
    /**
     * The gift card's estimate count.
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