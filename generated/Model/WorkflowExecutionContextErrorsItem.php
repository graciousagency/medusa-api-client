<?php

namespace Gracious\MedusaApiClientBundle\Model;

class WorkflowExecutionContextErrorsItem extends \ArrayObject
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
     * The error's details.
     *
     * @var array<string, mixed>|null
     */
    protected $error;
    /**
     * The error's action.
     *
     * @var string|null
     */
    protected $action;
    /**
     * The error's handler type.
     *
     * @var string|null
     */
    protected $handlerType;
    /**
     * The error's details.
     *
     * @return array<string, mixed>|null
     */
    public function getError(): ?iterable
    {
        return $this->error;
    }
    /**
     * The error's details.
     *
     * @param array<string, mixed>|null $error
     *
     * @return self
     */
    public function setError(?iterable $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * The error's action.
     *
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * The error's action.
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
    /**
     * The error's handler type.
     *
     * @return string|null
     */
    public function getHandlerType(): ?string
    {
        return $this->handlerType;
    }
    /**
     * The error's handler type.
     *
     * @param string|null $handlerType
     *
     * @return self
     */
    public function setHandlerType(?string $handlerType): self
    {
        $this->initialized['handlerType'] = true;
        $this->handlerType = $handlerType;
        return $this;
    }
}