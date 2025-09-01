<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecutionExecution extends \ArrayObject
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
     * The execution's steps. Each object key is a step ID, and the value is the object whose properties are shown below.
     *
     * @var array<string, AdminWorkflowExecutionExecutionStepsItem>|null
     */
    protected $steps;
    /**
     * The execution's steps. Each object key is a step ID, and the value is the object whose properties are shown below.
     *
     * @return array<string, AdminWorkflowExecutionExecutionStepsItem>|null
     */
    public function getSteps(): ?iterable
    {
        return $this->steps;
    }
    /**
     * The execution's steps. Each object key is a step ID, and the value is the object whose properties are shown below.
     *
     * @param array<string, AdminWorkflowExecutionExecutionStepsItem>|null $steps
     *
     * @return self
     */
    public function setSteps(?iterable $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
}