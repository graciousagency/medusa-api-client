<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement extends \ArrayObject
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
     * The ID of the executed workflow.
     *
     * @var string|null
     */
    protected $workflowId;
    /**
     * The ID of the workflow exection's transaction. Use this later to track the workflow execution's progress or succeed / fail its steps.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The idempotency key of the workflow execution.
     *
     * @var string|null
     */
    protected $parentStepIdempotencyKey;
    /**
     * Whether the workflow execution has finished.
     *
     * @var bool|null
     */
    protected $hasFinished;
    /**
     * Whether the workflow execution has failed.
     *
     * @var bool|null
     */
    protected $hasFailed;
    /**
     * The ID of the executed workflow.
     *
     * @return string|null
     */
    public function getWorkflowId(): ?string
    {
        return $this->workflowId;
    }
    /**
     * The ID of the executed workflow.
     *
     * @param string|null $workflowId
     *
     * @return self
     */
    public function setWorkflowId(?string $workflowId): self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * The ID of the workflow exection's transaction. Use this later to track the workflow execution's progress or succeed / fail its steps.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The ID of the workflow exection's transaction. Use this later to track the workflow execution's progress or succeed / fail its steps.
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
     * The idempotency key of the workflow execution.
     *
     * @return string|null
     */
    public function getParentStepIdempotencyKey(): ?string
    {
        return $this->parentStepIdempotencyKey;
    }
    /**
     * The idempotency key of the workflow execution.
     *
     * @param string|null $parentStepIdempotencyKey
     *
     * @return self
     */
    public function setParentStepIdempotencyKey(?string $parentStepIdempotencyKey): self
    {
        $this->initialized['parentStepIdempotencyKey'] = true;
        $this->parentStepIdempotencyKey = $parentStepIdempotencyKey;
        return $this;
    }
    /**
     * Whether the workflow execution has finished.
     *
     * @return bool|null
     */
    public function getHasFinished(): ?bool
    {
        return $this->hasFinished;
    }
    /**
     * Whether the workflow execution has finished.
     *
     * @param bool|null $hasFinished
     *
     * @return self
     */
    public function setHasFinished(?bool $hasFinished): self
    {
        $this->initialized['hasFinished'] = true;
        $this->hasFinished = $hasFinished;
        return $this;
    }
    /**
     * Whether the workflow execution has failed.
     *
     * @return bool|null
     */
    public function getHasFailed(): ?bool
    {
        return $this->hasFailed;
    }
    /**
     * Whether the workflow execution has failed.
     *
     * @param bool|null $hasFailed
     *
     * @return self
     */
    public function setHasFailed(?bool $hasFailed): self
    {
        $this->initialized['hasFailed'] = true;
        $this->hasFailed = $hasFailed;
        return $this;
    }
}