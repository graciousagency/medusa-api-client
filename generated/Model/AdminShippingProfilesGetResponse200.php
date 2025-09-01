<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingProfilesGetResponse200 extends \ArrayObject
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
     * The list of shipping profiles.
     *
     * @var list<AdminShippingProfile>|null
     */
    protected $shippingProfiles;
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
     * The list of shipping profiles.
     *
     * @return list<AdminShippingProfile>|null
     */
    public function getShippingProfiles(): ?array
    {
        return $this->shippingProfiles;
    }
    /**
     * The list of shipping profiles.
     *
     * @param list<AdminShippingProfile>|null $shippingProfiles
     *
     * @return self
     */
    public function setShippingProfiles(?array $shippingProfiles): self
    {
        $this->initialized['shippingProfiles'] = true;
        $this->shippingProfiles = $shippingProfiles;
        return $this;
    }
}