<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsIdPromotionsPostBody extends \ArrayObject
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
     * The promotions to add to the campaign.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The promotions to remove from the campaign.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The promotions to add to the campaign.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The promotions to add to the campaign.
     *
     * @param list<string>|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * The promotions to remove from the campaign.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The promotions to remove from the campaign.
     *
     * @param list<string>|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}