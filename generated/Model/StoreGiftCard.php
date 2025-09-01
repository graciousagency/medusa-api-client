<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreGiftCard extends \ArrayObject
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
     * The customer's details.
     *
     * @var StoreCustomer|null
     */
    protected $customer;
    /**
     * The item's details.
     *
     * @var StoreOrderLineItem|null
     */
    protected $lineItem;
    /**
     * The gift card's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The gift card's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The gift card's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The gift card's amount.
     *
     * @var float|null
     */
    protected $value;
    /**
     * The gift card's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The ID of the customer that the gift card belongs to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The gift card's reference ID.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * A note with more information about the gift card.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The gift card's reference.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The date the gift card expires.
     *
     * @var \DateTime|null
     */
    protected $expiresAt;
    /**
     * The date the gift card was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the gift card was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The customer's details.
     *
     * @return StoreCustomer|null
     */
    public function getCustomer(): ?StoreCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param StoreCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?StoreCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * The item's details.
     *
     * @return StoreOrderLineItem|null
     */
    public function getLineItem(): ?StoreOrderLineItem
    {
        return $this->lineItem;
    }
    /**
     * The item's details.
     *
     * @param StoreOrderLineItem|null $lineItem
     *
     * @return self
     */
    public function setLineItem(?StoreOrderLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * The gift card's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The gift card's ID.
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
     * The gift card's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The gift card's code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The gift card's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The gift card's status.
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
     * The gift card's amount.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * The gift card's amount.
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The gift card's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The gift card's currency code.
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
     * The ID of the customer that the gift card belongs to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer that the gift card belongs to.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The gift card's reference ID.
     *
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }
    /**
     * The gift card's reference ID.
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
     * A note with more information about the gift card.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note with more information about the gift card.
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
     * The gift card's reference.
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * The gift card's reference.
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
     * The date the gift card expires.
     *
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }
    /**
     * The date the gift card expires.
     *
     * @param \DateTime|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The date the gift card was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the gift card was created.
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
     * The date the gift card was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the gift card was updated.
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