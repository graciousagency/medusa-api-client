<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StorePaymentCollection extends \ArrayObject
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
     * The payment collection's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The payment collection's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The total amount to be paid.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The total authorized amount of the collection's payments.
     *
     * @var float|null
     */
    protected $authorizedAmount;
    /**
     * The total captured amount of the collection's payments.
     *
     * @var float|null
     */
    protected $capturedAmount;
    /**
     * The total refunded amount of the collection's payments.
     *
     * @var float|null
     */
    protected $refundedAmount;
    /**
     * The date the payment collection was completed.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * The date the payment collection was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the payment collection was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The payment collection's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The payment collection's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The payment provider used to process the collection's payments and sessions.
     *
     * @var list<StorePaymentProvider>|null
     */
    protected $paymentProviders;
    /**
     * The payment collection's payment sessions.
     *
     * @var list<StorePaymentSession>|null
     */
    protected $paymentSessions;
    /**
     * The payment collection's payments.
     *
     * @var list<BasePayment>|null
     */
    protected $payments;
    /**
     * The payment collection's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The payment collection's ID.
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
     * The payment collection's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The payment collection's currency code.
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
     * The total amount to be paid.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The total amount to be paid.
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
     * The total authorized amount of the collection's payments.
     *
     * @return float|null
     */
    public function getAuthorizedAmount(): ?float
    {
        return $this->authorizedAmount;
    }
    /**
     * The total authorized amount of the collection's payments.
     *
     * @param float|null $authorizedAmount
     *
     * @return self
     */
    public function setAuthorizedAmount(?float $authorizedAmount): self
    {
        $this->initialized['authorizedAmount'] = true;
        $this->authorizedAmount = $authorizedAmount;
        return $this;
    }
    /**
     * The total captured amount of the collection's payments.
     *
     * @return float|null
     */
    public function getCapturedAmount(): ?float
    {
        return $this->capturedAmount;
    }
    /**
     * The total captured amount of the collection's payments.
     *
     * @param float|null $capturedAmount
     *
     * @return self
     */
    public function setCapturedAmount(?float $capturedAmount): self
    {
        $this->initialized['capturedAmount'] = true;
        $this->capturedAmount = $capturedAmount;
        return $this;
    }
    /**
     * The total refunded amount of the collection's payments.
     *
     * @return float|null
     */
    public function getRefundedAmount(): ?float
    {
        return $this->refundedAmount;
    }
    /**
     * The total refunded amount of the collection's payments.
     *
     * @param float|null $refundedAmount
     *
     * @return self
     */
    public function setRefundedAmount(?float $refundedAmount): self
    {
        $this->initialized['refundedAmount'] = true;
        $this->refundedAmount = $refundedAmount;
        return $this;
    }
    /**
     * The date the payment collection was completed.
     *
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * The date the payment collection was completed.
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * The date the payment collection was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the payment collection was created.
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
     * The date the payment collection was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the payment collection was updated.
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
     * The payment collection's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The payment collection's metadata, can hold custom key-value pairs.
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
     * The payment collection's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The payment collection's status.
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
     * The payment provider used to process the collection's payments and sessions.
     *
     * @return list<StorePaymentProvider>|null
     */
    public function getPaymentProviders(): ?array
    {
        return $this->paymentProviders;
    }
    /**
     * The payment provider used to process the collection's payments and sessions.
     *
     * @param list<StorePaymentProvider>|null $paymentProviders
     *
     * @return self
     */
    public function setPaymentProviders(?array $paymentProviders): self
    {
        $this->initialized['paymentProviders'] = true;
        $this->paymentProviders = $paymentProviders;
        return $this;
    }
    /**
     * The payment collection's payment sessions.
     *
     * @return list<StorePaymentSession>|null
     */
    public function getPaymentSessions(): ?array
    {
        return $this->paymentSessions;
    }
    /**
     * The payment collection's payment sessions.
     *
     * @param list<StorePaymentSession>|null $paymentSessions
     *
     * @return self
     */
    public function setPaymentSessions(?array $paymentSessions): self
    {
        $this->initialized['paymentSessions'] = true;
        $this->paymentSessions = $paymentSessions;
        return $this;
    }
    /**
     * The payment collection's payments.
     *
     * @return list<BasePayment>|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }
    /**
     * The payment collection's payments.
     *
     * @param list<BasePayment>|null $payments
     *
     * @return self
     */
    public function setPayments(?array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
}