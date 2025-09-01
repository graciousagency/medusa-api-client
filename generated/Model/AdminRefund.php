<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRefund extends \ArrayObject
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
     * The refund's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The refund's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The ID of the refund reason.
     *
     * @var string|null
     */
    protected $refundReasonId;
    /**
     * More details about the refund.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The date the refund was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The ID of the user that created the refund.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The payment's details.
     *
     * @var BasePayment|null
     */
    protected $payment;
    /**
     * The refund reason's details.
     *
     * @var RefundReason|null
     */
    protected $refundReason;
    /**
     * The refund's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The refund's ID.
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
     * The refund's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The refund's amount.
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
     * The ID of the refund reason.
     *
     * @return string|null
     */
    public function getRefundReasonId(): ?string
    {
        return $this->refundReasonId;
    }
    /**
     * The ID of the refund reason.
     *
     * @param string|null $refundReasonId
     *
     * @return self
     */
    public function setRefundReasonId(?string $refundReasonId): self
    {
        $this->initialized['refundReasonId'] = true;
        $this->refundReasonId = $refundReasonId;
        return $this;
    }
    /**
     * More details about the refund.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * More details about the refund.
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
     * The date the refund was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the refund was created.
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
     * The ID of the user that created the refund.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the refund.
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
    /**
     * The refund reason's details.
     *
     * @return RefundReason|null
     */
    public function getRefundReason(): ?RefundReason
    {
        return $this->refundReason;
    }
    /**
     * The refund reason's details.
     *
     * @param RefundReason|null $refundReason
     *
     * @return self
     */
    public function setRefundReason(?RefundReason $refundReason): self
    {
        $this->initialized['refundReason'] = true;
        $this->refundReason = $refundReason;
        return $this;
    }
}