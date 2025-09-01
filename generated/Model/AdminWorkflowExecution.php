<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecution extends \ArrayObject
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
     * The workflow execution's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the workflow.
     *
     * @var string|null
     */
    protected $workflowId;
    /**
     * The workflow execution's transaction ID.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The workflow execution's steps details.
     *
     * @var AdminWorkflowExecutionExecution|null
     */
    protected $execution;
    /**
     * The workflow execution's context.
     *
     * @var WorkflowExecutionContext|null
     */
    protected $context;
    /**
     * The workflow execution's state.
     *
     * @var string|null
     */
    protected $state;
    /**
     * The date the workflow execution was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the workflow execution was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the workflow execution was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The workflow execution's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The workflow execution's ID.
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
     * The ID of the workflow.
     *
     * @return string|null
     */
    public function getWorkflowId(): ?string
    {
        return $this->workflowId;
    }
    /**
     * The ID of the workflow.
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
     * The workflow execution's transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The workflow execution's transaction ID.
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
     * The workflow execution's steps details.
     *
     * @return AdminWorkflowExecutionExecution|null
     */
    public function getExecution(): ?AdminWorkflowExecutionExecution
    {
        return $this->execution;
    }
    /**
     * The workflow execution's steps details.
     *
     * @param AdminWorkflowExecutionExecution|null $execution
     *
     * @return self
     */
    public function setExecution(?AdminWorkflowExecutionExecution $execution): self
    {
        $this->initialized['execution'] = true;
        $this->execution = $execution;
        return $this;
    }
    /**
     * The workflow execution's context.
     *
     * @return WorkflowExecutionContext|null
     */
    public function getContext(): ?WorkflowExecutionContext
    {
        return $this->context;
    }
    /**
     * The workflow execution's context.
     *
     * @param WorkflowExecutionContext|null $context
     *
     * @return self
     */
    public function setContext(?WorkflowExecutionContext $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * The workflow execution's state.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * The workflow execution's state.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The date the workflow execution was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the workflow execution was created.
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
     * The date the workflow execution was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the workflow execution was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The date the workflow execution was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the workflow execution was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}