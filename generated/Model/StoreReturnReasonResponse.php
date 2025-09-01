<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreReturnReasonResponse extends \ArrayObject
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
     * @var StoreReturnReason|null
     */
    protected $returnReason;
    /**
     * The return reason's details.
     *
     * @return StoreReturnReason|null
     */
    public function getReturnReason(): ?StoreReturnReason
    {
        return $this->returnReason;
    }
    /**
     * The return reason's details.
     *
     * @param StoreReturnReason|null $returnReason
     *
     * @return self
     */
    public function setReturnReason(?StoreReturnReason $returnReason): self
    {
        $this->initialized['returnReason'] = true;
        $this->returnReason = $returnReason;
        return $this;
    }
}