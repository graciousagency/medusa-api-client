<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReturnReasonResponse extends \ArrayObject
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
     * The return reason's details.
     *
     * @var AdminReturnReason|null
     */
    protected $returnReason;
    /**
     * The return reason's details.
     *
     * @return AdminReturnReason|null
     */
    public function getReturnReason(): ?AdminReturnReason
    {
        return $this->returnReason;
    }
    /**
     * The return reason's details.
     *
     * @param AdminReturnReason|null $returnReason
     *
     * @return self
     */
    public function setReturnReason(?AdminReturnReason $returnReason): self
    {
        $this->initialized['returnReason'] = true;
        $this->returnReason = $returnReason;
        return $this;
    }
}