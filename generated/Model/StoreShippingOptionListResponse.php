<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreShippingOptionListResponse extends \ArrayObject
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
     * The shipping option's shipping options.
     *
     * @var list<StoreCartShippingOption>|null
     */
    protected $shippingOptions;
    /**
     * The shipping option's shipping options.
     *
     * @return list<StoreCartShippingOption>|null
     */
    public function getShippingOptions(): ?array
    {
        return $this->shippingOptions;
    }
    /**
     * The shipping option's shipping options.
     *
     * @param list<StoreCartShippingOption>|null $shippingOptions
     *
     * @return self
     */
    public function setShippingOptions(?array $shippingOptions): self
    {
        $this->initialized['shippingOptions'] = true;
        $this->shippingOptions = $shippingOptions;
        return $this;
    }
}