<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderClaim extends \ArrayObject
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
     * The claim's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the order associated with the claim.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The order items targetted by the claim.
     *
     * @var list<BaseClaimItem>|null
     */
    protected $claimItems;
    /**
     * The outbound or new items of the claim.
     *
     * @var list<BaseClaimItem>|null
     */
    protected $additionalItems;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $return;
    /**
     * The ID of the associated return.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * Whether the customer should be notified about changes in the claim.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The amount to be refunded.
     *
     * @var float|null
     */
    protected $refundAmount;
    /**
     * The claim's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * The claim's shipping methods.
     *
     * @var list<OrderShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The claim's transactions.
     *
     * @var list<OrderTransaction>|null
     */
    protected $transactions;
    /**
     * The claim's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The claim's creation date.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The claim's update date.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The claim's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The order change's order.
     *
     * @var Order|null
     */
    protected $order;
    /**
     * The claim's order version.
     *
     * @var float|null
     */
    protected $orderVersion;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $rawRefundAmount;
    /**
     * The ID of the user that created the claim.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date the claim was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The date the claim was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The claim's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The claim's ID.
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
     * The ID of the order associated with the claim.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order associated with the claim.
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
     * The order items targetted by the claim.
     *
     * @return list<BaseClaimItem>|null
     */
    public function getClaimItems(): ?array
    {
        return $this->claimItems;
    }
    /**
     * The order items targetted by the claim.
     *
     * @param list<BaseClaimItem>|null $claimItems
     *
     * @return self
     */
    public function setClaimItems(?array $claimItems): self
    {
        $this->initialized['claimItems'] = true;
        $this->claimItems = $claimItems;
        return $this;
    }
    /**
     * The outbound or new items of the claim.
     *
     * @return list<BaseClaimItem>|null
     */
    public function getAdditionalItems(): ?array
    {
        return $this->additionalItems;
    }
    /**
     * The outbound or new items of the claim.
     *
     * @param list<BaseClaimItem>|null $additionalItems
     *
     * @return self
     */
    public function setAdditionalItems(?array $additionalItems): self
    {
        $this->initialized['additionalItems'] = true;
        $this->additionalItems = $additionalItems;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getReturn(): ?iterable
    {
        return $this->return;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $return
     *
     * @return self
     */
    public function setReturn(?iterable $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
    /**
     * The ID of the associated return.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the associated return.
     *
     * @param string|null $returnId
     *
     * @return self
     */
    public function setReturnId(?string $returnId): self
    {
        $this->initialized['returnId'] = true;
        $this->returnId = $returnId;
        return $this;
    }
    /**
     * Whether the customer should be notified about changes in the claim.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether the customer should be notified about changes in the claim.
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
     * The claim's display ID.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The claim's display ID.
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
     * The claim's shipping methods.
     *
     * @return list<OrderShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The claim's shipping methods.
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
     * The claim's transactions.
     *
     * @return list<OrderTransaction>|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }
    /**
     * The claim's transactions.
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
     * The claim's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The claim's metadata, used to store custom key-value pairs.
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
     * The claim's creation date.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The claim's creation date.
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
     * The claim's update date.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The claim's update date.
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
     * The claim's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The claim's type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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
     * The claim's order version.
     *
     * @return float|null
     */
    public function getOrderVersion(): ?float
    {
        return $this->orderVersion;
    }
    /**
     * The claim's order version.
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
     * The ID of the user that created the claim.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the claim.
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
     * The date the claim was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the claim was deleted.
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
     * The date the claim was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the claim was canceled.
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
}