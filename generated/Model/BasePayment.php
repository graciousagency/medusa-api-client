<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BasePayment extends \ArrayObject
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
     * The payment's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The payment's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The amount authorized of the payment.
     *
     * @var float|null
     */
    protected $authorizedAmount;
    /**
     * The payment's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The ID of the payment provider used to process this payment.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The payment's data, useful for processing by the payment provider.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The date the payment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the payment was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the payment was captured.
     *
     * @var \DateTime|null
     */
    protected $capturedAt;
    /**
     * The date the payment was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The captured amount of the payment.
     *
     * @var float|null
     */
    protected $capturedAmount;
    /**
     * The refunded amount of the payment.
     *
     * @var float|null
     */
    protected $refundedAmount;
    /**
     * The details of payment captures.
     *
     * @var list<BaseCapture>|null
     */
    protected $captures;
    /**
     * The details of payment refunds.
     *
     * @var list<BaseRefund>|null
     */
    protected $refunds;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $paymentCollection;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $paymentSession;
    /**
     * The payment's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The payment's ID.
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
     * The payment's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The payment's amount.
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
     * The amount authorized of the payment.
     *
     * @return float|null
     */
    public function getAuthorizedAmount(): ?float
    {
        return $this->authorizedAmount;
    }
    /**
     * The amount authorized of the payment.
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
     * The payment's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The payment's currency code.
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
     * The ID of the payment provider used to process this payment.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the payment provider used to process this payment.
     *
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * The payment's data, useful for processing by the payment provider.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The payment's data, useful for processing by the payment provider.
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The date the payment was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the payment was created.
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
     * The date the payment was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the payment was updated.
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
     * The date the payment was captured.
     *
     * @return \DateTime|null
     */
    public function getCapturedAt(): ?\DateTime
    {
        return $this->capturedAt;
    }
    /**
     * The date the payment was captured.
     *
     * @param \DateTime|null $capturedAt
     *
     * @return self
     */
    public function setCapturedAt(?\DateTime $capturedAt): self
    {
        $this->initialized['capturedAt'] = true;
        $this->capturedAt = $capturedAt;
        return $this;
    }
    /**
     * The date the payment was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the payment was canceled.
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
     * The captured amount of the payment.
     *
     * @return float|null
     */
    public function getCapturedAmount(): ?float
    {
        return $this->capturedAmount;
    }
    /**
     * The captured amount of the payment.
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
     * The refunded amount of the payment.
     *
     * @return float|null
     */
    public function getRefundedAmount(): ?float
    {
        return $this->refundedAmount;
    }
    /**
     * The refunded amount of the payment.
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
     * The details of payment captures.
     *
     * @return list<BaseCapture>|null
     */
    public function getCaptures(): ?array
    {
        return $this->captures;
    }
    /**
     * The details of payment captures.
     *
     * @param list<BaseCapture>|null $captures
     *
     * @return self
     */
    public function setCaptures(?array $captures): self
    {
        $this->initialized['captures'] = true;
        $this->captures = $captures;
        return $this;
    }
    /**
     * The details of payment refunds.
     *
     * @return list<BaseRefund>|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }
    /**
     * The details of payment refunds.
     *
     * @param list<BaseRefund>|null $refunds
     *
     * @return self
     */
    public function setRefunds(?array $refunds): self
    {
        $this->initialized['refunds'] = true;
        $this->refunds = $refunds;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getPaymentCollection(): ?iterable
    {
        return $this->paymentCollection;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $paymentCollection
     *
     * @return self
     */
    public function setPaymentCollection(?iterable $paymentCollection): self
    {
        $this->initialized['paymentCollection'] = true;
        $this->paymentCollection = $paymentCollection;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getPaymentSession(): ?iterable
    {
        return $this->paymentSession;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $paymentSession
     *
     * @return self
     */
    public function setPaymentSession(?iterable $paymentSession): self
    {
        $this->initialized['paymentSession'] = true;
        $this->paymentSession = $paymentSession;
        return $this;
    }
}