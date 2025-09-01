<?php

namespace Gracious\MedusaApiClientBundle\Model;

class WorkflowExecutionContextDataInvokeItem extends \ArrayObject
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
     * The invokation's details.
     *
     * @var WorkflowExecutionContextDataInvokeItemOutput|null
     */
    protected $output;
    /**
     * The invokation's details.
     *
     * @return WorkflowExecutionContextDataInvokeItemOutput|null
     */
    public function getOutput(): ?WorkflowExecutionContextDataInvokeItemOutput
    {
        return $this->output;
    }
    /**
     * The invokation's details.
     *
     * @param WorkflowExecutionContextDataInvokeItemOutput|null $output
     *
     * @return self
     */
    public function setOutput(?WorkflowExecutionContextDataInvokeItemOutput $output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
}