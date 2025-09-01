<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminImportProductResponse extends \ArrayObject
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
     * The ID of the workflow execution's transaction. This is useful to confirm the import using the `/admin/products/:transaction-id/import` API route.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The import's summary.
     *
     * @var AdminImportProductResponseSummary|null
     */
    protected $summary;
    /**
     * The ID of the workflow execution's transaction. This is useful to confirm the import using the `/admin/products/:transaction-id/import` API route.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The ID of the workflow execution's transaction. This is useful to confirm the import using the `/admin/products/:transaction-id/import` API route.
     *
     * @param string|null $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * The import's summary.
     *
     * @return AdminImportProductResponseSummary|null
     */
    public function getSummary(): ?AdminImportProductResponseSummary
    {
        return $this->summary;
    }
    /**
     * The import's summary.
     *
     * @param AdminImportProductResponseSummary|null $summary
     *
     * @return self
     */
    public function setSummary(?AdminImportProductResponseSummary $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
}