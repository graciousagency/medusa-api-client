<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderEditResponse extends \ArrayObject
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
     * The order change's details.
     *
     * @var AdminOrderChange|null
     */
    protected $orderChange;
    /**
     * The order change's details.
     *
     * @return AdminOrderChange|null
     */
    public function getOrderChange(): ?AdminOrderChange
    {
        return $this->orderChange;
    }
    /**
     * The order change's details.
     *
     * @param AdminOrderChange|null $orderChange
     *
     * @return self
     */
    public function setOrderChange(?AdminOrderChange $orderChange): self
    {
        $this->initialized['orderChange'] = true;
        $this->orderChange = $orderChange;
        return $this;
    }
}