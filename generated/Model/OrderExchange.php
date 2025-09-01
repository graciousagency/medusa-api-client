<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderExchange extends \ArrayObject
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
     * The ID of the order the exchange is created for.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The new items (outbound) sent by the exchange.
     *
     * @var list<BaseExchangeItem>|null
     */
    protected $additionalItems;
    /**
     * Whether to send the customer notifications when the exchange is updated.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The amount to be exchanged or refunded. If the amount is negative, it must be refunded. If positive, additional payment is required from the customer.
     *
     * @var float|null
     */
    protected $differenceDue;
    /**
     * The return's details.
     *
     * @var _Return|null
     */
    protected $return;
    /**
     * The ID of the associated exchange.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The exchange's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The exchange's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * The shipping methods used to send the new (outbound) items.
     *
     * @var list<OrderShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The exchange's transactions.
     *
     * @var list<OrderTransaction>|null
     */
    protected $transactions;
    /**
     * The exchange's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date that the exchange was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date that the exchange was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The order change's order.
     *
     * @var Order|null
     */
    protected $order;
    /**
     * The version of the order when the exchange is applied.
     *
     * @var float|null
     */
    protected $orderVersion;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $rawDifferenceDue;
    /**
     * Whether variants that are out of stock can be added to the exchange as outbound items.
     *
     * @var bool|null
     */
    protected $allowBackorder;
    /**
     * The ID of the user that created the exchange.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The date the exchange was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The date the exchange was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The ID of the order the exchange is created for.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order the exchange is created for.
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
     * The new items (outbound) sent by the exchange.
     *
     * @return list<BaseExchangeItem>|null
     */
    public function getAdditionalItems(): ?array
    {
        return $this->additionalItems;
    }
    /**
     * The new items (outbound) sent by the exchange.
     *
     * @param list<BaseExchangeItem>|null $additionalItems
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
     * Whether to send the customer notifications when the exchange is updated.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether to send the customer notifications when the exchange is updated.
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
     * The amount to be exchanged or refunded. If the amount is negative, it must be refunded. If positive, additional payment is required from the customer.
     *
     * @return float|null
     */
    public function getDifferenceDue(): ?float
    {
        return $this->differenceDue;
    }
    /**
     * The amount to be exchanged or refunded. If the amount is negative, it must be refunded. If positive, additional payment is required from the customer.
     *
     * @param float|null $differenceDue
     *
     * @return self
     */
    public function setDifferenceDue(?float $differenceDue): self
    {
        $this->initialized['differenceDue'] = true;
        $this->differenceDue = $differenceDue;
        return $this;
    }
    /**
     * The return's details.
     *
     * @return _Return|null
     */
    public function getReturn(): ?_Return
    {
        return $this->return;
    }
    /**
     * The return's details.
     *
     * @param _Return|null $return
     *
     * @return self
     */
    public function setReturn(?_Return $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
    /**
     * The ID of the associated exchange.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the associated exchange.
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
     * The exchange's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The exchange's ID.
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
     * The exchange's display ID.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The exchange's display ID.
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
     * The shipping methods used to send the new (outbound) items.
     *
     * @return list<OrderShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The shipping methods used to send the new (outbound) items.
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
     * The exchange's transactions.
     *
     * @return list<OrderTransaction>|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }
    /**
     * The exchange's transactions.
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
     * The exchange's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The exchange's metadata, can hold custom key-value pairs.
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
     * The date that the exchange was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date that the exchange was created.
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
     * The date that the exchange was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date that the exchange was updated.
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
     * The version of the order when the exchange is applied.
     *
     * @return float|null
     */
    public function getOrderVersion(): ?float
    {
        return $this->orderVersion;
    }
    /**
     * The version of the order when the exchange is applied.
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
    public function getRawDifferenceDue()
    {
        return $this->rawDifferenceDue;
    }
    /**
     * 
     *
     * @param mixed $rawDifferenceDue
     *
     * @return self
     */
    public function setRawDifferenceDue($rawDifferenceDue): self
    {
        $this->initialized['rawDifferenceDue'] = true;
        $this->rawDifferenceDue = $rawDifferenceDue;
        return $this;
    }
    /**
     * Whether variants that are out of stock can be added to the exchange as outbound items.
     *
     * @return bool|null
     */
    public function getAllowBackorder(): ?bool
    {
        return $this->allowBackorder;
    }
    /**
     * Whether variants that are out of stock can be added to the exchange as outbound items.
     *
     * @param bool|null $allowBackorder
     *
     * @return self
     */
    public function setAllowBackorder(?bool $allowBackorder): self
    {
        $this->initialized['allowBackorder'] = true;
        $this->allowBackorder = $allowBackorder;
        return $this;
    }
    /**
     * The ID of the user that created the exchange.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the exchange.
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
     * The date the exchange was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the exchange was deleted.
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
     * The date the exchange was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the exchange was canceled.
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