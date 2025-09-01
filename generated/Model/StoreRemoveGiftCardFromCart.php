<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreRemoveGiftCardFromCart extends \ArrayObject
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
     * The gift card code to remove from the cart.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The gift card code to remove from the cart.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The gift card code to remove from the cart.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
}