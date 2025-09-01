<?php

namespace Gracious\MedusaApiClientBundle\Model;

class RefundReasonResponse extends \ArrayObject
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
     * The refund reason's details.
     *
     * @var AdminRefundReason|null
     */
    protected $refundReason;
    /**
     * The refund reason's details.
     *
     * @return AdminRefundReason|null
     */
    public function getRefundReason(): ?AdminRefundReason
    {
        return $this->refundReason;
    }
    /**
     * The refund reason's details.
     *
     * @param AdminRefundReason|null $refundReason
     *
     * @return self
     */
    public function setRefundReason(?AdminRefundReason $refundReason): self
    {
        $this->initialized['refundReason'] = true;
        $this->refundReason = $refundReason;
        return $this;
    }
}