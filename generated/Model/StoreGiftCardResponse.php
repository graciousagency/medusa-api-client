<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreGiftCardResponse extends \ArrayObject
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
     * The gift card's details.
     *
     * @var StoreGiftCard|null
     */
    protected $giftCard;
    /**
     * The gift card's details.
     *
     * @return StoreGiftCard|null
     */
    public function getGiftCard(): ?StoreGiftCard
    {
        return $this->giftCard;
    }
    /**
     * The gift card's details.
     *
     * @param StoreGiftCard|null $giftCard
     *
     * @return self
     */
    public function setGiftCard(?StoreGiftCard $giftCard): self
    {
        $this->initialized['giftCard'] = true;
        $this->giftCard = $giftCard;
        return $this;
    }
}