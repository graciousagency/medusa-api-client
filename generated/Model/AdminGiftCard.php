<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminGiftCard extends \ArrayObject
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
     * The item's details.
     *
     * @var AdminOrderLineItem|null
     */
    protected $lineItem;
    /**
     * The customer's details.
     *
     * @var AdminCustomer|null
     */
    protected $customer;
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
     * The ID of the customer associated with the gift card.
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
     * The gift card's note.
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
     * The date the gift card expires at.
     *
     * @var string|null
     */
    protected $expiresAt;
    /**
     * The date the gift card was created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the gift card was updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The item's details.
     *
     * @return AdminOrderLineItem|null
     */
    public function getLineItem(): ?AdminOrderLineItem
    {
        return $this->lineItem;
    }
    /**
     * The item's details.
     *
     * @param AdminOrderLineItem|null $lineItem
     *
     * @return self
     */
    public function setLineItem(?AdminOrderLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;
        return $this;
    }
    /**
     * The customer's details.
     *
     * @return AdminCustomer|null
     */
    public function getCustomer(): ?AdminCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param AdminCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?AdminCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
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
     * The ID of the customer associated with the gift card.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer associated with the gift card.
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
     * The gift card's note.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * The gift card's note.
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
     * The date the gift card expires at.
     *
     * @return string|null
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }
    /**
     * The date the gift card expires at.
     *
     * @param string|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?string $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The date the gift card was created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the gift card was created at.
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
     * The date the gift card was updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the gift card was updated at.
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