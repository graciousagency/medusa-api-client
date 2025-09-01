<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignResponse extends \ArrayObject
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
     * The campaign's details.
     *
     * @var AdminCampaign|null
     */
    protected $campaign;
    /**
     * The campaign's details.
     *
     * @return AdminCampaign|null
     */
    public function getCampaign(): ?AdminCampaign
    {
        return $this->campaign;
    }
    /**
     * The campaign's details.
     *
     * @param AdminCampaign|null $campaign
     *
     * @return self
     */
    public function setCampaign(?AdminCampaign $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
}