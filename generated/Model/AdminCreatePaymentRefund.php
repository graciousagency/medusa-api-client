<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreatePaymentRefund extends \ArrayObject
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
     * The amount to refund.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The ID of a refund reason.
     *
     * @var string|null
     */
    protected $refundReasonId;
    /**
     * A note to attach to the refund.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The amount to refund.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The amount to refund.
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
     * The ID of a refund reason.
     *
     * @return string|null
     */
    public function getRefundReasonId(): ?string
    {
        return $this->refundReasonId;
    }
    /**
     * The ID of a refund reason.
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
     * A note to attach to the refund.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note to attach to the refund.
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
}