<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminExchangeOrderResponse extends \ArrayObject
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
     * The order change's order.
     *
     * @var Order|null
     */
    protected $order;
    /**
     * The exchange's details.
     *
     * @var AdminExchange|null
     */
    protected $exchange;
    /**
     * The order change's order.
     *
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }
    /**
     * The order change's order.
     *
     * @param Order|null $order
     *
     * @return self
     */
    public function setOrder(?Order $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * The exchange's details.
     *
     * @return AdminExchange|null
     */
    public function getExchange(): ?AdminExchange
    {
        return $this->exchange;
    }
    /**
     * The exchange's details.
     *
     * @param AdminExchange|null $exchange
     *
     * @return self
     */
    public function setExchange(?AdminExchange $exchange): self
    {
        $this->initialized['exchange'] = true;
        $this->exchange = $exchange;
        return $this;
    }
}