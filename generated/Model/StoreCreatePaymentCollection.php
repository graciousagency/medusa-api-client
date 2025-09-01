<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCreatePaymentCollection extends \ArrayObject
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
     * The ID of the cart this payment collection is for.
     *
     * @var string|null
     */
    protected $cartId;
    /**
     * The ID of the cart this payment collection is for.
     *
     * @return string|null
     */
    public function getCartId(): ?string
    {
        return $this->cartId;
    }
    /**
     * The ID of the cart this payment collection is for.
     *
     * @param string|null $cartId
     *
     * @return self
     */
    public function setCartId(?string $cartId): self
    {
        $this->initialized['cartId'] = true;
        $this->cartId = $cartId;
        return $this;
    }
}