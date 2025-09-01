<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminWorkflowsExecutionsWorkflowIdRunPostResponse200 extends \ArrayObject
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
     * The workflow's details
     *
     * @var AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement|null
     */
    protected $acknowledgement;
    /**
     * The workflow's details
     *
     * @return AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement|null
     */
    public function getAcknowledgement(): ?AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement
    {
        return $this->acknowledgement;
    }
    /**
     * The workflow's details
     *
     * @param AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement|null $acknowledgement
     *
     * @return self
     */
    public function setAcknowledgement(?AdminWorkflowsExecutionsWorkflowIdRunPostResponse200Acknowledgement $acknowledgement): self
    {
        $this->initialized['acknowledgement'] = true;
        $this->acknowledgement = $acknowledgement;
        return $this;
    }
}