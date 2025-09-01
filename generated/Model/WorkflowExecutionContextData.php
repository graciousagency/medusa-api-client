<?php

namespace Gracious\MedusaApiClientBundle\Model;

class WorkflowExecutionContextData extends \ArrayObject
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
     * The step's invokation details.
     *
     * @var array<string, WorkflowExecutionContextDataInvokeItem>|null
     */
    protected $invoke;
    /**
     * the payload of the transaction.
     *
     * @var mixed|null
     */
    protected $payload;
    /**
     * The step's invokation details.
     *
     * @return array<string, WorkflowExecutionContextDataInvokeItem>|null
     */
    public function getInvoke(): ?iterable
    {
        return $this->invoke;
    }
    /**
     * The step's invokation details.
     *
     * @param array<string, WorkflowExecutionContextDataInvokeItem>|null $invoke
     *
     * @return self
     */
    public function setInvoke(?iterable $invoke): self
    {
        $this->initialized['invoke'] = true;
        $this->invoke = $invoke;
        return $this;
    }
    /**
     * the payload of the transaction.
     *
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }
    /**
     * the payload of the transaction.
     *
     * @param mixed $payload
     *
     * @return self
     */
    public function setPayload($payload): self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
}