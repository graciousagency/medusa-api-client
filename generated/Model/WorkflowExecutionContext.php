<?php

namespace Gracious\MedusaApiClientBundle\Model;

class WorkflowExecutionContext extends \ArrayObject
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
     * The context's data.
     *
     * @var WorkflowExecutionContextData|null
     */
    protected $data;
    /**
     * The context's compensate.
     *
     * @var array<string, mixed>|null
     */
    protected $compensate;
    /**
     * The context's errors.
     *
     * @var list<WorkflowExecutionContextErrorsItem>|null
     */
    protected $errors;
    /**
     * The context's data.
     *
     * @return WorkflowExecutionContextData|null
     */
    public function getData(): ?WorkflowExecutionContextData
    {
        return $this->data;
    }
    /**
     * The context's data.
     *
     * @param WorkflowExecutionContextData|null $data
     *
     * @return self
     */
    public function setData(?WorkflowExecutionContextData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The context's compensate.
     *
     * @return array<string, mixed>|null
     */
    public function getCompensate(): ?iterable
    {
        return $this->compensate;
    }
    /**
     * The context's compensate.
     *
     * @param array<string, mixed>|null $compensate
     *
     * @return self
     */
    public function setCompensate(?iterable $compensate): self
    {
        $this->initialized['compensate'] = true;
        $this->compensate = $compensate;
        return $this;
    }
    /**
     * The context's errors.
     *
     * @return list<WorkflowExecutionContextErrorsItem>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }
    /**
     * The context's errors.
     *
     * @param list<WorkflowExecutionContextErrorsItem>|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}