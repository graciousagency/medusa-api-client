<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowsExecutionsWorkflowIdStepsSuccessPostResponse200 extends \ArrayObject
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
     * Whether the workflow step was succeeded.
     *
     * @var bool|null
     */
    protected $success;
    /**
     * Whether the workflow step was succeeded.
     *
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Whether the workflow step was succeeded.
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}