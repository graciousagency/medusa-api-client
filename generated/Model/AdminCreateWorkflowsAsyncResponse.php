<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateWorkflowsAsyncResponse extends \ArrayObject
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
     * The workflows execution's transaction ID.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * The ID of the step whose status was changed.
     *
     * @var string|null
     */
    protected $stepId;
    /**
     * Sets the step's response. It accepts any type.
     *
     * @var mixed|null
     */
    protected $response;
    /**
     * Sets the compensation function's input. It accepts any response.
     *
     * @var mixed|null
     */
    protected $compensateInput;
    /**
     * Whether to invoke or compensate the step.
     *
     * @var string|null
     */
    protected $action;
    /**
     * The workflows execution's transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * The workflows execution's transaction ID.
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
     * The ID of the step whose status was changed.
     *
     * @return string|null
     */
    public function getStepId(): ?string
    {
        return $this->stepId;
    }
    /**
     * The ID of the step whose status was changed.
     *
     * @param string|null $stepId
     *
     * @return self
     */
    public function setStepId(?string $stepId): self
    {
        $this->initialized['stepId'] = true;
        $this->stepId = $stepId;
        return $this;
    }
    /**
     * Sets the step's response. It accepts any type.
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * Sets the step's response. It accepts any type.
     *
     * @param mixed $response
     *
     * @return self
     */
    public function setResponse($response): self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
    /**
     * Sets the compensation function's input. It accepts any response.
     *
     * @return mixed
     */
    public function getCompensateInput()
    {
        return $this->compensateInput;
    }
    /**
     * Sets the compensation function's input. It accepts any response.
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
    /**
     * Whether to invoke or compensate the step.
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Whether to invoke or compensate the step.
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}