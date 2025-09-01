<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecutionExecutionStepsItem extends \ArrayObject
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
     * The step's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The state of the step's invokation function.
     *
     * @var AdminWorkflowExecutionExecutionStepsItemInvoke|null
     */
    protected $invoke;
    /**
     * The step's definition details.
     *
     * @var AdminWorkflowExecutionExecutionStepsItemDefinition|null
     */
    protected $definition;
    /**
     * The state of the step's compensation function.
     *
     * @var AdminWorkflowExecutionExecutionStepsItemCompensate|null
     */
    protected $compensate;
    /**
     * The step's depth in the workflow's execution.
     *
     * @var float|null
     */
    protected $depth;
    /**
     * The timestamp the step started executing.
     *
     * @var float|null
     */
    protected $startedAt;
    /**
     * The step's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The step's ID.
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
     * The state of the step's invokation function.
     *
     * @return AdminWorkflowExecutionExecutionStepsItemInvoke|null
     */
    public function getInvoke(): ?AdminWorkflowExecutionExecutionStepsItemInvoke
    {
        return $this->invoke;
    }
    /**
     * The state of the step's invokation function.
     *
     * @param AdminWorkflowExecutionExecutionStepsItemInvoke|null $invoke
     *
     * @return self
     */
    public function setInvoke(?AdminWorkflowExecutionExecutionStepsItemInvoke $invoke): self
    {
        $this->initialized['invoke'] = true;
        $this->invoke = $invoke;
        return $this;
    }
    /**
     * The step's definition details.
     *
     * @return AdminWorkflowExecutionExecutionStepsItemDefinition|null
     */
    public function getDefinition(): ?AdminWorkflowExecutionExecutionStepsItemDefinition
    {
        return $this->definition;
    }
    /**
     * The step's definition details.
     *
     * @param AdminWorkflowExecutionExecutionStepsItemDefinition|null $definition
     *
     * @return self
     */
    public function setDefinition(?AdminWorkflowExecutionExecutionStepsItemDefinition $definition): self
    {
        $this->initialized['definition'] = true;
        $this->definition = $definition;
        return $this;
    }
    /**
     * The state of the step's compensation function.
     *
     * @return AdminWorkflowExecutionExecutionStepsItemCompensate|null
     */
    public function getCompensate(): ?AdminWorkflowExecutionExecutionStepsItemCompensate
    {
        return $this->compensate;
    }
    /**
     * The state of the step's compensation function.
     *
     * @param AdminWorkflowExecutionExecutionStepsItemCompensate|null $compensate
     *
     * @return self
     */
    public function setCompensate(?AdminWorkflowExecutionExecutionStepsItemCompensate $compensate): self
    {
        $this->initialized['compensate'] = true;
        $this->compensate = $compensate;
        return $this;
    }
    /**
     * The step's depth in the workflow's execution.
     *
     * @return float|null
     */
    public function getDepth(): ?float
    {
        return $this->depth;
    }
    /**
     * The step's depth in the workflow's execution.
     *
     * @param float|null $depth
     *
     * @return self
     */
    public function setDepth(?float $depth): self
    {
        $this->initialized['depth'] = true;
        $this->depth = $depth;
        return $this;
    }
    /**
     * The timestamp the step started executing.
     *
     * @return float|null
     */
    public function getStartedAt(): ?float
    {
        return $this->startedAt;
    }
    /**
     * The timestamp the step started executing.
     *
     * @param float|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?float $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
}