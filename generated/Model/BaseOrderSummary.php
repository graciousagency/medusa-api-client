<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderSummary extends \ArrayObject
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
     * The total amount paid.
     *
     * @var float|null
     */
    protected $paidTotal;
    /**
     * The total amount refunded.
     *
     * @var float|null
     */
    protected $refundedTotal;
    /**
     * The difference pending to be processed. If negative, the customer needs a refund. Otherwise, additional payment is required from the customer.
     *
     * @var float|null
     */
    protected $pendingDifference;
    /**
     * The order's current total, could be the total after a change in the order.
     *
     * @var float|null
     */
    protected $currentOrderTotal;
    /**
     * The order's original total.
     *
     * @var float|null
     */
    protected $originalOrderTotal;
    /**
     * The total of the transactions made on the order.
     *
     * @var float|null
     */
    protected $transactionTotal;
    /**
     * The order's total without the credit-line total.
     *
     * @var float|null
     */
    protected $accountingTotal;
    /**
     * The total amount paid.
     *
     * @return float|null
     */
    public function getPaidTotal(): ?float
    {
        return $this->paidTotal;
    }
    /**
     * The total amount paid.
     *
     * @param float|null $paidTotal
     *
     * @return self
     */
    public function setPaidTotal(?float $paidTotal): self
    {
        $this->initialized['paidTotal'] = true;
        $this->paidTotal = $paidTotal;
        return $this;
    }
    /**
     * The total amount refunded.
     *
     * @return float|null
     */
    public function getRefundedTotal(): ?float
    {
        return $this->refundedTotal;
    }
    /**
     * The total amount refunded.
     *
     * @param float|null $refundedTotal
     *
     * @return self
     */
    public function setRefundedTotal(?float $refundedTotal): self
    {
        $this->initialized['refundedTotal'] = true;
        $this->refundedTotal = $refundedTotal;
        return $this;
    }
    /**
     * The difference pending to be processed. If negative, the customer needs a refund. Otherwise, additional payment is required from the customer.
     *
     * @return float|null
     */
    public function getPendingDifference(): ?float
    {
        return $this->pendingDifference;
    }
    /**
     * The difference pending to be processed. If negative, the customer needs a refund. Otherwise, additional payment is required from the customer.
     *
     * @param float|null $pendingDifference
     *
     * @return self
     */
    public function setPendingDifference(?float $pendingDifference): self
    {
        $this->initialized['pendingDifference'] = true;
        $this->pendingDifference = $pendingDifference;
        return $this;
    }
    /**
     * The order's current total, could be the total after a change in the order.
     *
     * @return float|null
     */
    public function getCurrentOrderTotal(): ?float
    {
        return $this->currentOrderTotal;
    }
    /**
     * The order's current total, could be the total after a change in the order.
     *
     * @param float|null $currentOrderTotal
     *
     * @return self
     */
    public function setCurrentOrderTotal(?float $currentOrderTotal): self
    {
        $this->initialized['currentOrderTotal'] = true;
        $this->currentOrderTotal = $currentOrderTotal;
        return $this;
    }
    /**
     * The order's original total.
     *
     * @return float|null
     */
    public function getOriginalOrderTotal(): ?float
    {
        return $this->originalOrderTotal;
    }
    /**
     * The order's original total.
     *
     * @param float|null $originalOrderTotal
     *
     * @return self
     */
    public function setOriginalOrderTotal(?float $originalOrderTotal): self
    {
        $this->initialized['originalOrderTotal'] = true;
        $this->originalOrderTotal = $originalOrderTotal;
        return $this;
    }
    /**
     * The total of the transactions made on the order.
     *
     * @return float|null
     */
    public function getTransactionTotal(): ?float
    {
        return $this->transactionTotal;
    }
    /**
     * The total of the transactions made on the order.
     *
     * @param float|null $transactionTotal
     *
     * @return self
     */
    public function setTransactionTotal(?float $transactionTotal): self
    {
        $this->initialized['transactionTotal'] = true;
        $this->transactionTotal = $transactionTotal;
        return $this;
    }
    /**
     * The order's total without the credit-line total.
     *
     * @return float|null
     */
    public function getAccountingTotal(): ?float
    {
        return $this->accountingTotal;
    }
    /**
     * The order's total without the credit-line total.
     *
     * @param float|null $accountingTotal
     *
     * @return self
     */
    public function setAccountingTotal(?float $accountingTotal): self
    {
        $this->initialized['accountingTotal'] = true;
        $this->accountingTotal = $accountingTotal;
        return $this;
    }
}