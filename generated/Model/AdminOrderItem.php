<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderItem extends \ArrayObject
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
     * The ID of the order this item belongs to.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The ID of the associated line item.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The order item's version.
     *
     * @var float|null
     */
    protected $version;
    /**
     * The order item's history.
     *
     * @var AdminOrderItemHistory|null
     */
    protected $history;
    /**
     * The item's details.
     *
     * @var AdminOrderLineItem|null
     */
    protected $item;
    /**
     * The ID of the order this item belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this item belongs to.
     *
     * @param string|null $orderId
     *
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The ID of the associated line item.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * The ID of the associated line item.
     *
     * @param string|null $itemId
     *
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * The order item's version.
     *
     * @return float|null
     */
    public function getVersion(): ?float
    {
        return $this->version;
    }
    /**
     * The order item's version.
     *
     * @param float|null $version
     *
     * @return self
     */
    public function setVersion(?float $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The order item's history.
     *
     * @return AdminOrderItemHistory|null
     */
    public function getHistory(): ?AdminOrderItemHistory
    {
        return $this->history;
    }
    /**
     * The order item's history.
     *
     * @param AdminOrderItemHistory|null $history
     *
     * @return self
     */
    public function setHistory(?AdminOrderItemHistory $history): self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
    /**
     * The item's details.
     *
     * @return AdminOrderLineItem|null
     */
    public function getItem(): ?AdminOrderLineItem
    {
        return $this->item;
    }
    /**
     * The item's details.
     *
     * @param AdminOrderLineItem|null $item
     *
     * @return self
     */
    public function setItem(?AdminOrderLineItem $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
}