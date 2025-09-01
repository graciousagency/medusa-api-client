<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsIdPostBodybudget extends \ArrayObject
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
     * The campaign budget's limit.
     *
     * @var float|null
     */
    protected $limit;
    /**
     * The campaign budget's limit.
     *
     * @return float|null
     */
    public function getLimit(): ?float
    {
        return $this->limit;
    }
    /**
     * The campaign budget's limit.
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
}