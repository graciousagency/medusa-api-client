<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReturn extends \ArrayObject
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
     * The return's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The return's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The amount refunded by this return.
     *
     * @var float|null
     */
    protected $refundAmount;
    /**
     * The ID of the associated order.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The return's items.
     *
     * @var list<AdminReturnItem>|null
     */
    protected $items;
    /**
     * The date the return was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the return was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The return's exchange id.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The return's location id.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The return's claim id.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The return's order version.
     *
     * @var float|null
     */
    protected $orderVersion;
    /**
     * The return's display id.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * Whether the customer should receive notifications about the return's updates.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The date the return was received.
     *
     * @var string|null
     */
    protected $receivedAt;
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
     * The amount refunded by this return.
     *
     * @return float|null
     */
    public function getRefundAmount(): ?float
    {
        return $this->refundAmount;
    }
    /**
     * The amount refunded by this return.
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
     * The ID of the associated order.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the associated order.
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
     * @return list<AdminReturnItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The return's items.
     *
     * @param list<AdminReturnItem>|null $items
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
     * The date the return was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the return was canceled.
     *
     * @param \DateTime|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?\DateTime $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * The return's exchange id.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The return's exchange id.
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
     * The return's location id.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The return's location id.
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
     * The return's claim id.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The return's claim id.
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
     * The return's order version.
     *
     * @return float|null
     */
    public function getOrderVersion(): ?float
    {
        return $this->orderVersion;
    }
    /**
     * The return's order version.
     *
     * @param float|null $orderVersion
     *
     * @return self
     */
    public function setOrderVersion(?float $orderVersion): self
    {
        $this->initialized['orderVersion'] = true;
        $this->orderVersion = $orderVersion;
        return $this;
    }
    /**
     * The return's display id.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The return's display id.
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
     * Whether the customer should receive notifications about the return's updates.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether the customer should receive notifications about the return's updates.
     *
     * @param bool|null $noNotification
     *
     * @return self
     */
    public function setNoNotification(?bool $noNotification): self
    {
        $this->initialized['noNotification'] = true;
        $this->noNotification = $noNotification;
        return $this;
    }
    /**
     * The date the return was received.
     *
     * @return string|null
     */
    public function getReceivedAt(): ?string
    {
        return $this->receivedAt;
    }
    /**
     * The date the return was received.
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