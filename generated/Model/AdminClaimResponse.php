<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminClaimResponse extends \ArrayObject
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
     * The claim's details.
     *
     * @var AdminClaim|null
     */
    protected $claim;
    /**
     * The claim's details.
     *
     * @return AdminClaim|null
     */
    public function getClaim(): ?AdminClaim
    {
        return $this->claim;
    }
    /**
     * The claim's details.
     *
     * @param AdminClaim|null $claim
     *
     * @return self
     */
    public function setClaim(?AdminClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
}