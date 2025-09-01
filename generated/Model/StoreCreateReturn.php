<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCreateReturn extends \ArrayObject
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
     * The ID of the order this return is created for.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The return's items.
     *
     * @var list<StoreCreateReturnItem>|null
     */
    protected $items;
    /**
     * The return's shipping details.
     *
     * @var StoreCreateReturnShipping|null
     */
    protected $returnShipping;
    /**
     * A note with more details about the return.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Whether to mark the return as received.
     *
     * @var bool|null
     */
    protected $receiveNow;
    /**
     * The ID of the location that items are returned to.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The ID of the order this return is created for.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this return is created for.
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
     * The return's items.
     *
     * @return list<StoreCreateReturnItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The return's items.
     *
     * @param list<StoreCreateReturnItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The return's shipping details.
     *
     * @return StoreCreateReturnShipping|null
     */
    public function getReturnShipping(): ?StoreCreateReturnShipping
    {
        return $this->returnShipping;
    }
    /**
     * The return's shipping details.
     *
     * @param StoreCreateReturnShipping|null $returnShipping
     *
     * @return self
     */
    public function setReturnShipping(?StoreCreateReturnShipping $returnShipping): self
    {
        $this->initialized['returnShipping'] = true;
        $this->returnShipping = $returnShipping;
        return $this;
    }
    /**
     * A note with more details about the return.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note with more details about the return.
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * Whether to mark the return as received.
     *
     * @return bool|null
     */
    public function getReceiveNow(): ?bool
    {
        return $this->receiveNow;
    }
    /**
     * Whether to mark the return as received.
     *
     * @param bool|null $receiveNow
     *
     * @return self
     */
    public function setReceiveNow(?bool $receiveNow): self
    {
        $this->initialized['receiveNow'] = true;
        $this->receiveNow = $receiveNow;
        return $this;
    }
    /**
     * The ID of the location that items are returned to.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location that items are returned to.
     *
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
}