<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersIdLineItemsGetResponse200 extends \ArrayObject
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
     * The order's order items.
     *
     * @var list<AdminOrderItem>|null
     */
    protected $orderItems;
    /**
     * The order's order items.
     *
     * @return list<AdminOrderItem>|null
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }
    /**
     * The order's order items.
     *
     * @param list<AdminOrderItem>|null $orderItems
     *
     * @return self
     */
    public function setOrderItems(?array $orderItems): self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;
        return $this;
    }
}