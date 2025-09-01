<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionResponse extends \ArrayObject
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
     * The promotion's details.
     *
     * @var AdminPromotion|null
     */
    protected $promotion;
    /**
     * The promotion's details.
     *
     * @return AdminPromotion|null
     */
    public function getPromotion(): ?AdminPromotion
    {
        return $this->promotion;
    }
    /**
     * The promotion's details.
     *
     * @param AdminPromotion|null $promotion
     *
     * @return self
     */
    public function setPromotion(?AdminPromotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
}