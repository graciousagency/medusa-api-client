<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreReturn extends \ArrayObject
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
     * The return's items.
     *
     * @var list<StoreReturnItem>|null
     */
    protected $items;
    /**
     * The return's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The return's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The return's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * The date the return was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The ID of the order this return belongs to.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The ID of the location the return items are being returned to.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The date the return was canceled.
     *
     * @var string|null
     */
    protected $canceledAt;
    /**
     * The ID of the associated exchange.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The ID of the associated claim.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The amount to be refunded.
     *
     * @var float|null
     */
    protected $refundAmount;
    /**
     * The date the return items were received.
     *
     * @var string|null
     */
    protected $receivedAt;
    /**
     * The return's items.
     *
     * @return list<StoreReturnItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The return's items.
     *
     * @param list<StoreReturnItem>|null $items
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
     * The return's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The return's status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The return's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The return's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The return's display ID.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The return's display ID.
     *
     * @param float|null $displayId
     *
     * @return self
     */
    public function setDisplayId(?float $displayId): self
    {
        $this->initialized['displayId'] = true;
        $this->displayId = $displayId;
        return $this;
    }
    /**
     * The date the return was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the return was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The ID of the order this return belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this return belongs to.
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
     * The ID of the location the return items are being returned to.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location the return items are being returned to.
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
    /**
     * The date the return was canceled.
     *
     * @return string|null
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }
    /**
     * The date the return was canceled.
     *
     * @param string|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?string $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * The ID of the associated exchange.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The ID of the associated exchange.
     *
     * @param string|null $exchangeId
     *
     * @return self
     */
    public function setExchangeId(?string $exchangeId): self
    {
        $this->initialized['exchangeId'] = true;
        $this->exchangeId = $exchangeId;
        return $this;
    }
    /**
     * The ID of the associated claim.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The ID of the associated claim.
     *
     * @param string|null $claimId
     *
     * @return self
     */
    public function setClaimId(?string $claimId): self
    {
        $this->initialized['claimId'] = true;
        $this->claimId = $claimId;
        return $this;
    }
    /**
     * The amount to be refunded.
     *
     * @return float|null
     */
    public function getRefundAmount(): ?float
    {
        return $this->refundAmount;
    }
    /**
     * The amount to be refunded.
     *
     * @param float|null $refundAmount
     *
     * @return self
     */
    public function setRefundAmount(?float $refundAmount): self
    {
        $this->initialized['refundAmount'] = true;
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * The date the return items were received.
     *
     * @return string|null
     */
    public function getReceivedAt(): ?string
    {
        return $this->receivedAt;
    }
    /**
     * The date the return items were received.
     *
     * @param string|null $receivedAt
     *
     * @return self
     */
    public function setReceivedAt(?string $receivedAt): self
    {
        $this->initialized['receivedAt'] = true;
        $this->receivedAt = $receivedAt;
        return $this;
    }
}