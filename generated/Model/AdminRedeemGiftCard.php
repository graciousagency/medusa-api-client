<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRedeemGiftCard extends \ArrayObject
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
     * The ID of the customer that the gift card belongs to. The gift card's value will be added to the customer's store credit account.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The ID of the customer that the gift card belongs to. The gift card's value will be added to the customer's store credit account.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer that the gift card belongs to. The gift card's value will be added to the customer's store credit account.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
}