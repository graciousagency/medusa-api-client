<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentResponse extends \ArrayObject
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
     * The fulfillment's details.
     *
     * @var AdminFulfillment|null
     */
    protected $fulfillment;
    /**
     * The fulfillment's details.
     *
     * @return AdminFulfillment|null
     */
    public function getFulfillment(): ?AdminFulfillment
    {
        return $this->fulfillment;
    }
    /**
     * The fulfillment's details.
     *
     * @param AdminFulfillment|null $fulfillment
     *
     * @return self
     */
    public function setFulfillment(?AdminFulfillment $fulfillment): self
    {
        $this->initialized['fulfillment'] = true;
        $this->fulfillment = $fulfillment;
        return $this;
    }
}