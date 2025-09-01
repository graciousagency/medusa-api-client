<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateWorkflowsRun extends \ArrayObject
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
     * The input to pass to the workflow. Can be of any type.
     *
     * @var mixed|null
     */
    protected $input;
    /**
     * The ID of the workflow execution's transaction.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The input to pass to the workflow. Can be of any type.
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }
    /**
     * The input to pass to the workflow. Can be of any type.
     *
     * @param mixed $input
     *
     * @return self
     */
    public function setInput($input): self
    {
        $this->initialized['input'] = true;
        $this->input = $input;
        return $this;
    }
    /**
     * The ID of the workflow execution's transaction.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The ID of the workflow execution's transaction.
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