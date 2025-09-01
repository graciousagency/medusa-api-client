<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderSummary extends \ArrayObject
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
     * The remaining amount to be paid or refunded.
     *
     * @var float|null
     */
    protected $pendingDifference;
    /**
     * The order's current total.
     *
     * @var float|null
     */
    protected $currentOrderTotal;
    /**
     * The order's total before any changes.
     *
     * @var float|null
     */
    protected $originalOrderTotal;
    /**
     * The total of the transactions (payments and refunds) made on the order.
     *
     * @var float|null
     */
    protected $transactionTotal;
    /**
     * The total paid amount.
     *
     * @var float|null
     */
    protected $paidTotal;
    /**
     * The total refunded amount.
     *
     * @var float|null
     */
    protected $refundedTotal;
    /**
     * The total credit line amount.
     *
     * @var float|null
     */
    protected $creditLineTotal;
    /**
     * The total amount for accounting purposes.
     *
     * @var float|null
     */
    protected $accountingTotal;
    /**
     * The summary's raw pending difference.
     *
     * @var array<string, mixed>|null
     */
    protected $rawPendingDifference;
    /**
     * The summary's raw current order total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawCurrentOrderTotal;
    /**
     * The summary's raw original order total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawOriginalOrderTotal;
    /**
     * The summary's raw transaction total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawTransactionTotal;
    /**
     * The summary's raw paid total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawPaidTotal;
    /**
     * The summary's raw refunded total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawRefundedTotal;
    /**
     * The summary's raw credit line total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawCreditLineTotal;
    /**
     * The summary's raw accounting total.
     *
     * @var array<string, mixed>|null
     */
    protected $rawAccountingTotal;
    /**
     * The remaining amount to be paid or refunded.
     *
     * @return float|null
     */
    public function getPendingDifference(): ?float
    {
        return $this->pendingDifference;
    }
    /**
     * The remaining amount to be paid or refunded.
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
     * The order's current total.
     *
     * @return float|null
     */
    public function getCurrentOrderTotal(): ?float
    {
        return $this->currentOrderTotal;
    }
    /**
     * The order's current total.
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
     * The order's total before any changes.
     *
     * @return float|null
     */
    public function getOriginalOrderTotal(): ?float
    {
        return $this->originalOrderTotal;
    }
    /**
     * The order's total before any changes.
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
     * The total of the transactions (payments and refunds) made on the order.
     *
     * @return float|null
     */
    public function getTransactionTotal(): ?float
    {
        return $this->transactionTotal;
    }
    /**
     * The total of the transactions (payments and refunds) made on the order.
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
     * The total paid amount.
     *
     * @return float|null
     */
    public function getPaidTotal(): ?float
    {
        return $this->paidTotal;
    }
    /**
     * The total paid amount.
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
     * The total refunded amount.
     *
     * @return float|null
     */
    public function getRefundedTotal(): ?float
    {
        return $this->refundedTotal;
    }
    /**
     * The total refunded amount.
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
     * The total credit line amount.
     *
     * @return float|null
     */
    public function getCreditLineTotal(): ?float
    {
        return $this->creditLineTotal;
    }
    /**
     * The total credit line amount.
     *
     * @param float|null $creditLineTotal
     *
     * @return self
     */
    public function setCreditLineTotal(?float $creditLineTotal): self
    {
        $this->initialized['creditLineTotal'] = true;
        $this->creditLineTotal = $creditLineTotal;
        return $this;
    }
    /**
     * The total amount for accounting purposes.
     *
     * @return float|null
     */
    public function getAccountingTotal(): ?float
    {
        return $this->accountingTotal;
    }
    /**
     * The total amount for accounting purposes.
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
    /**
     * The summary's raw pending difference.
     *
     * @return array<string, mixed>|null
     */
    public function getRawPendingDifference(): ?iterable
    {
        return $this->rawPendingDifference;
    }
    /**
     * The summary's raw pending difference.
     *
     * @param array<string, mixed>|null $rawPendingDifference
     *
     * @return self
     */
    public function setRawPendingDifference(?iterable $rawPendingDifference): self
    {
        $this->initialized['rawPendingDifference'] = true;
        $this->rawPendingDifference = $rawPendingDifference;
        return $this;
    }
    /**
     * The summary's raw current order total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawCurrentOrderTotal(): ?iterable
    {
        return $this->rawCurrentOrderTotal;
    }
    /**
     * The summary's raw current order total.
     *
     * @param array<string, mixed>|null $rawCurrentOrderTotal
     *
     * @return self
     */
    public function setRawCurrentOrderTotal(?iterable $rawCurrentOrderTotal): self
    {
        $this->initialized['rawCurrentOrderTotal'] = true;
        $this->rawCurrentOrderTotal = $rawCurrentOrderTotal;
        return $this;
    }
    /**
     * The summary's raw original order total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawOriginalOrderTotal(): ?iterable
    {
        return $this->rawOriginalOrderTotal;
    }
    /**
     * The summary's raw original order total.
     *
     * @param array<string, mixed>|null $rawOriginalOrderTotal
     *
     * @return self
     */
    public function setRawOriginalOrderTotal(?iterable $rawOriginalOrderTotal): self
    {
        $this->initialized['rawOriginalOrderTotal'] = true;
        $this->rawOriginalOrderTotal = $rawOriginalOrderTotal;
        return $this;
    }
    /**
     * The summary's raw transaction total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawTransactionTotal(): ?iterable
    {
        return $this->rawTransactionTotal;
    }
    /**
     * The summary's raw transaction total.
     *
     * @param array<string, mixed>|null $rawTransactionTotal
     *
     * @return self
     */
    public function setRawTransactionTotal(?iterable $rawTransactionTotal): self
    {
        $this->initialized['rawTransactionTotal'] = true;
        $this->rawTransactionTotal = $rawTransactionTotal;
        return $this;
    }
    /**
     * The summary's raw paid total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawPaidTotal(): ?iterable
    {
        return $this->rawPaidTotal;
    }
    /**
     * The summary's raw paid total.
     *
     * @param array<string, mixed>|null $rawPaidTotal
     *
     * @return self
     */
    public function setRawPaidTotal(?iterable $rawPaidTotal): self
    {
        $this->initialized['rawPaidTotal'] = true;
        $this->rawPaidTotal = $rawPaidTotal;
        return $this;
    }
    /**
     * The summary's raw refunded total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawRefundedTotal(): ?iterable
    {
        return $this->rawRefundedTotal;
    }
    /**
     * The summary's raw refunded total.
     *
     * @param array<string, mixed>|null $rawRefundedTotal
     *
     * @return self
     */
    public function setRawRefundedTotal(?iterable $rawRefundedTotal): self
    {
        $this->initialized['rawRefundedTotal'] = true;
        $this->rawRefundedTotal = $rawRefundedTotal;
        return $this;
    }
    /**
     * The summary's raw credit line total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawCreditLineTotal(): ?iterable
    {
        return $this->rawCreditLineTotal;
    }
    /**
     * The summary's raw credit line total.
     *
     * @param array<string, mixed>|null $rawCreditLineTotal
     *
     * @return self
     */
    public function setRawCreditLineTotal(?iterable $rawCreditLineTotal): self
    {
        $this->initialized['rawCreditLineTotal'] = true;
        $this->rawCreditLineTotal = $rawCreditLineTotal;
        return $this;
    }
    /**
     * The summary's raw accounting total.
     *
     * @return array<string, mixed>|null
     */
    public function getRawAccountingTotal(): ?iterable
    {
        return $this->rawAccountingTotal;
    }
    /**
     * The summary's raw accounting total.
     *
     * @param array<string, mixed>|null $rawAccountingTotal
     *
     * @return self
     */
    public function setRawAccountingTotal(?iterable $rawAccountingTotal): self
    {
        $this->initialized['rawAccountingTotal'] = true;
        $this->rawAccountingTotal = $rawAccountingTotal;
        return $this;
    }
}