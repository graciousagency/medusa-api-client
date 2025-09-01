<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminGiftCardResponse extends \ArrayObject
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
     * @var AdminGiftCard|null
     */
    protected $giftCard;
    /**
     * The gift card's details.
     *
     * @return AdminGiftCard|null
     */
    public function getGiftCard(): ?AdminGiftCard
    {
        return $this->giftCard;
    }
    /**
     * The gift card's details.
     *
     * @param AdminGiftCard|null $giftCard
     *
     * @return self
     */
    public function setGiftCard(?AdminGiftCard $giftCard): self
    {
        $this->initialized['giftCard'] = true;
        $this->giftCard = $giftCard;
        return $this;
    }
}