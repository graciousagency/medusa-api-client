<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowExecutionExecutionStepsItemInvoke extends \ArrayObject
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
     * The invokation step's state.
     *
     * @var string|null
     */
    protected $state;
    /**
     * The invokation step's state.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The invokation step's state.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * The invokation step's state.
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
     * The invokation step's state.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The invokation step's state.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}