<?php

namespace Gracious\MedusaApiClientBundle\Model;

class _Return extends \ArrayObject
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
     * @var list<OrderReturnItem>|null
     */
    protected $items;
    /**
     * The return's shipping methods.
     *
     * @var list<OrderShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The return's transactions.
     *
     * @var list<OrderTransaction>|null
     */
    protected $transactions;
    /**
     * The return's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the return was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the return was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the return was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $rawRefundAmount;
    /**
     * The order change's order.
     *
     * @var Order|null
     */
    protected $order;
    /**
     * The ID of the exchange this return belongs to, if any.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $exchange;
    /**
     * The ID of the claim this return belongs to, if any.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The order change's claim.
     *
     * @var OrderClaim|null
     */
    protected $claim;
    /**
     * The return order's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * The ID of the stock location the items are returned to.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * Whether to notify the customer about changes in the return.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The ID of the user that created the return.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date the return was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The date the return was requested.
     *
     * @var \DateTime|null
     */
    protected $requestedAt;
    /**
     * The date the return was received.
     *
     * @var \DateTime|null
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
     * @return list<OrderReturnItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The return's items.
     *
     * @param list<OrderReturnItem>|null $items
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
     * The return's shipping methods.
     *
     * @return list<OrderShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The return's shipping methods.
     *
     * @param list<OrderShippingMethod>|null $shippingMethods
     *
     * @return self
     */
    public function setShippingMethods(?array $shippingMethods): self
    {
        $this->initialized['shippingMethods'] = true;
        $this->shippingMethods = $shippingMethods;
        return $this;
    }
    /**
     * The return's transactions.
     *
     * @return list<OrderTransaction>|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }
    /**
     * The return's transactions.
     *
     * @param list<OrderTransaction>|null $transactions
     *
     * @return self
     */
    public function setTransactions(?array $transactions): self
    {
        $this->initialized['transactions'] = true;
        $this->transactions = $transactions;
        return $this;
    }
    /**
     * The return's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The return's metadata, can hold custom key-value pairs.
     *
     * @param array<string, mixed>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
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
     * The date the return was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the return was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
     * 
     *
     * @return mixed
     */
    public function getRawRefundAmount()
    {
        return $this->rawRefundAmount;
    }
    /**
     * 
     *
     * @param mixed $rawRefundAmount
     *
     * @return self
     */
    public function setRawRefundAmount($rawRefundAmount): self
    {
        $this->initialized['rawRefundAmount'] = true;
        $this->rawRefundAmount = $rawRefundAmount;
        return $this;
    }
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
     * The ID of the exchange this return belongs to, if any.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The ID of the exchange this return belongs to, if any.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getExchange(): ?iterable
    {
        return $this->exchange;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $exchange
     *
     * @return self
     */
    public function setExchange(?iterable $exchange): self
    {
        $this->initialized['exchange'] = true;
        $this->exchange = $exchange;
        return $this;
    }
    /**
     * The ID of the claim this return belongs to, if any.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The ID of the claim this return belongs to, if any.
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
     * The order change's claim.
     *
     * @return OrderClaim|null
     */
    public function getClaim(): ?OrderClaim
    {
        return $this->claim;
    }
    /**
     * The order change's claim.
     *
     * @param OrderClaim|null $claim
     *
     * @return self
     */
    public function setClaim(?OrderClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
    /**
     * The return order's display ID.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The return order's display ID.
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
     * The ID of the stock location the items are returned to.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the stock location the items are returned to.
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
     * Whether to notify the customer about changes in the return.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether to notify the customer about changes in the return.
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
     * The ID of the user that created the return.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the return.
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The date the return was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the return was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * The date the return was requested.
     *
     * @return \DateTime|null
     */
    public function getRequestedAt(): ?\DateTime
    {
        return $this->requestedAt;
    }
    /**
     * The date the return was requested.
     *
     * @param \DateTime|null $requestedAt
     *
     * @return self
     */
    public function setRequestedAt(?\DateTime $requestedAt): self
    {
        $this->initialized['requestedAt'] = true;
        $this->requestedAt = $requestedAt;
        return $this;
    }
    /**
     * The date the return was received.
     *
     * @return \DateTime|null
     */
    public function getReceivedAt(): ?\DateTime
    {
        return $this->receivedAt;
    }
    /**
     * The date the return was received.
     *
     * @param \DateTime|null $receivedAt
     *
     * @return self
     */
    public function setReceivedAt(?\DateTime $receivedAt): self
    {
        $this->initialized['receivedAt'] = true;
        $this->receivedAt = $receivedAt;
        return $this;
    }
}