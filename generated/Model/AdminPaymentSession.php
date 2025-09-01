<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPaymentSession extends \ArrayObject
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
     * The payment session's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The payment session's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The payment session's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The ID of the payment provider processing this session.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The payment session's data, useful for the payment provider processing the payment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The context around the payment, such as the customer's details.
     *
     * @var array<string, mixed>|null
     */
    protected $context;
    /**
     * The payment session's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The date the payment session was authorized.
     *
     * @var \DateTime|null
     */
    protected $authorizedAt;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $paymentCollection;
    /**
     * The payment's details.
     *
     * @var BasePayment|null
     */
    protected $payment;
    /**
     * The payment session's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The payment session's ID.
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
     * The payment session's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The payment session's amount.
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
     * The payment session's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The payment session's currency code.
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
     * The ID of the payment provider processing this session.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the payment provider processing this session.
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
     * The payment session's data, useful for the payment provider processing the payment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The payment session's data, useful for the payment provider processing the payment.
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
     * The context around the payment, such as the customer's details.
     *
     * @return array<string, mixed>|null
     */
    public function getContext(): ?iterable
    {
        return $this->context;
    }
    /**
     * The context around the payment, such as the customer's details.
     *
     * @param array<string, mixed>|null $context
     *
     * @return self
     */
    public function setContext(?iterable $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * The payment session's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The payment session's status.
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
     * The date the payment session was authorized.
     *
     * @return \DateTime|null
     */
    public function getAuthorizedAt(): ?\DateTime
    {
        return $this->authorizedAt;
    }
    /**
     * The date the payment session was authorized.
     *
     * @param \DateTime|null $authorizedAt
     *
     * @return self
     */
    public function setAuthorizedAt(?\DateTime $authorizedAt): self
    {
        $this->initialized['authorizedAt'] = true;
        $this->authorizedAt = $authorizedAt;
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
     * The payment's details.
     *
     * @return BasePayment|null
     */
    public function getPayment(): ?BasePayment
    {
        return $this->payment;
    }
    /**
     * The payment's details.
     *
     * @param BasePayment|null $payment
     *
     * @return self
     */
    public function setPayment(?BasePayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
}