<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseCapture extends \ArrayObject
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
     * The payment capture's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The captured amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The date the capture was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The ID of the user that captured the payment.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $payment;
    /**
     * The payment capture's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The payment capture's ID.
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
     * The captured amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The captured amount.
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
     * The date the capture was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the capture was created.
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
     * The ID of the user that captured the payment.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that captured the payment.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getPayment(): ?iterable
    {
        return $this->payment;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $payment
     *
     * @return self
     */
    public function setPayment(?iterable $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
}