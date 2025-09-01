<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminClaimOrderResponse extends \ArrayObject
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
     * The claim's details.
     *
     * @var AdminClaim|null
     */
    protected $claim;
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
     * The claim's details.
     *
     * @return AdminClaim|null
     */
    public function getClaim(): ?AdminClaim
    {
        return $this->claim;
    }
    /**
     * The claim's details.
     *
     * @param AdminClaim|null $claim
     *
     * @return self
     */
    public function setClaim(?AdminClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
}