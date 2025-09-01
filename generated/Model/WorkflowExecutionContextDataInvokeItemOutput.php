<?php

namespace Gracious\MedusaApiClientBundle\Model;

class WorkflowExecutionContextDataInvokeItemOutput extends \ArrayObject
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
     * the step's output
     *
     * @var mixed|null
     */
    protected $output;
    /**
     * the compensation function's input.
     *
     * @var mixed|null
     */
    protected $compensateInput;
    /**
     * the step's output
     *
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }
    /**
     * the step's output
     *
     * @param mixed $output
     *
     * @return self
     */
    public function setOutput($output): self
    {
        $this->initialized['output'] = true;
        $this->output = $output;
        return $this;
    }
    /**
     * the compensation function's input.
     *
     * @return mixed
     */
    public function getCompensateInput()
    {
        return $this->compensateInput;
    }
    /**
     * the compensation function's input.
     *
     * @param mixed $compensateInput
     *
     * @return self
     */
    public function setCompensateInput($compensateInput): self
    {
        $this->initialized['compensateInput'] = true;
        $this->compensateInput = $compensateInput;
        return $this;
    }
}