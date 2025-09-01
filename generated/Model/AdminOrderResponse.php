<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderResponse extends \ArrayObject
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
     * @var AdminOrder|null
     */
    protected $order;
    /**
     * The order's details.
     *
     * @return AdminOrder|null
     */
    public function getOrder(): ?AdminOrder
    {
        return $this->order;
    }
    /**
     * The order's details.
     *
     * @param AdminOrder|null $order
     *
     * @return self
     */
    public function setOrder(?AdminOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}