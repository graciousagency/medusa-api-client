<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsGetResponse200 extends \ArrayObject
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
     * The number of its skipped before the returned items.
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
     * The list of campaigns.
     *
     * @var list<CampaignResponse>|null
     */
    protected $campaigns;
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
     * The number of its skipped before the returned items.
     *
     * @return float|null
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }
    /**
     * The number of its skipped before the returned items.
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
     * The list of campaigns.
     *
     * @return list<CampaignResponse>|null
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }
    /**
     * The list of campaigns.
     *
     * @param list<CampaignResponse>|null $campaigns
     *
     * @return self
     */
    public function setCampaigns(?array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;
        return $this;
    }
}