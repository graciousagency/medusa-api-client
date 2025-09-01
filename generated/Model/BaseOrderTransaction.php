<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderTransaction extends \ArrayObject
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
     * The transaction's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the order this transaction belongs to.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The transaction's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The transaction's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The name of a table that this transaction references. If this transaction is for captured payment, its value is `capture`. If this transaction is for refunded payment, its value is `refund`.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of the referenced record in the referenced table.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The transaction's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date that the transaction was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date that the transaction was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The transaction's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The transaction's ID.
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
     * The ID of the order this transaction belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this transaction belongs to.
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
     * The transaction's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The transaction's amount.
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
    /**
     * The transaction's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The transaction's currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The name of a table that this transaction references. If this transaction is for captured payment, its value is `capture`. If this transaction is for refunded payment, its value is `refund`.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The name of a table that this transaction references. If this transaction is for captured payment, its value is `capture`. If this transaction is for refunded payment, its value is `refund`.
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
     * The ID of the referenced record in the referenced table.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The ID of the referenced record in the referenced table.
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
     * The transaction's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The transaction's metadata, can hold custom key-value pairs.
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
     * The date that the transaction was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date that the transaction was created.
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
     * The date that the transaction was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date that the transaction was updated.
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
}