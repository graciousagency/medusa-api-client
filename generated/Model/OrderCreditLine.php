<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderCreditLine extends \ArrayObject
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
     * The credit line's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the associated order.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $order;
    /**
     * The table that this credit line references. For example, `payment_collection`.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of the record in the referenced table. For example, `paycol_123`.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The credit line's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the credit line was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the credit line was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The credit line's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The credit line's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The credit line's ID.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getOrder(): ?iterable
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $order
     *
     * @return self
     */
    public function setOrder(?iterable $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * The table that this credit line references. For example, `payment_collection`.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The table that this credit line references. For example, `payment_collection`.
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * The ID of the record in the referenced table. For example, `paycol_123`.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The ID of the record in the referenced table. For example, `paycol_123`.
     *
     * @param string|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?string $referenceId): self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * The credit line's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The credit line's metadata, can hold custom key-value pairs.
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
     * The date the credit line was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the credit line was created.
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
     * The date the credit line was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the credit line was updated.
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
     * The credit line's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The credit line's amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}