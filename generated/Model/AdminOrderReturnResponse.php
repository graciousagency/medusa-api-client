<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderReturnResponse extends \ArrayObject
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
     * The return's details.
     *
     * @var AdminReturn|null
     */
    protected $return;
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
     * The return's details.
     *
     * @return AdminReturn|null
     */
    public function getReturn(): ?AdminReturn
    {
        return $this->return;
    }
    /**
     * The return's details.
     *
     * @param AdminReturn|null $return
     *
     * @return self
     */
    public function setReturn(?AdminReturn $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
}