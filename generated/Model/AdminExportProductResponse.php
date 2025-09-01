<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminExportProductResponse extends \ArrayObject
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
     * The ID of the workflow execution's transaction. Use it to check the status of the export by sending a GET request to `/admin/workflows-executions/export-products/:transaction-id`
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The ID of the workflow execution's transaction. Use it to check the status of the export by sending a GET request to `/admin/workflows-executions/export-products/:transaction-id`
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The ID of the workflow execution's transaction. Use it to check the status of the export by sending a GET request to `/admin/workflows-executions/export-products/:transaction-id`
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
}