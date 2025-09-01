<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecutionResponse extends \ArrayObject
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
     * The workflows execution's details.
     *
     * @var AdminWorkflowExecution|null
     */
    protected $workflowExecution;
    /**
     * The workflows execution's details.
     *
     * @return AdminWorkflowExecution|null
     */
    public function getWorkflowExecution(): ?AdminWorkflowExecution
    {
        return $this->workflowExecution;
    }
    /**
     * The workflows execution's details.
     *
     * @param AdminWorkflowExecution|null $workflowExecution
     *
     * @return self
     */
    public function setWorkflowExecution(?AdminWorkflowExecution $workflowExecution): self
    {
        $this->initialized['workflowExecution'] = true;
        $this->workflowExecution = $workflowExecution;
        return $this;
    }
}