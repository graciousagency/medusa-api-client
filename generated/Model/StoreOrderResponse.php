<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderResponse extends \ArrayObject
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
     * The order's details.
     *
     * @var StoreOrder|null
     */
    protected $order;
    /**
     * The order's details.
     *
     * @return StoreOrder|null
     */
    public function getOrder(): ?StoreOrder
    {
        return $this->order;
    }
    /**
     * The order's details.
     *
     * @param StoreOrder|null $order
     *
     * @return self
     */
    public function setOrder(?StoreOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}