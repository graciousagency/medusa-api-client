<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateGiftCardParams extends \ArrayObject
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
     * The gift card's code.
     *
     * @var string|null
     */
    protected $code;
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
     * The date the gift card expires at.
     *
     * @var string|null
     */
    protected $expiresAt;
    /**
     * The gift card's reference ID.
     *
     * @var string|null
     */
    protected $referenceId;
    /**
     * The gift card's reference.
     *
     * @var string|null
     */
    protected $reference;
    /**
     * The ID of the line item associated with the gift card.
     *
     * @var string|null
     */
    protected $lineItemId;
    /**
     * The ID of the customer associated with the gift card.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The gift card's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The ID of the line item associated with the gift card.
     *
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }
    /**
     * The ID of the line item associated with the gift card.
     *
     * @param string|null $lineItemId
     *
     * @return self
     */
    public function setLineItemId(?string $lineItemId): self
    {
        $this->initialized['lineItemId'] = true;
        $this->lineItemId = $lineItemId;
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
     * The gift card's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The gift card's metadata, can hold custom key-value pairs.
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
}