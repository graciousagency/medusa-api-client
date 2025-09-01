<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentSetResponse extends \ArrayObject
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
     * The service zone's fulfillment set.
     *
     * @var AdminFulfillmentSet|null
     */
    protected $fulfillmentSet;
    /**
     * The service zone's fulfillment set.
     *
     * @return AdminFulfillmentSet|null
     */
    public function getFulfillmentSet(): ?AdminFulfillmentSet
    {
        return $this->fulfillmentSet;
    }
    /**
     * The service zone's fulfillment set.
     *
     * @param AdminFulfillmentSet|null $fulfillmentSet
     *
     * @return self
     */
    public function setFulfillmentSet(?AdminFulfillmentSet $fulfillmentSet): self
    {
        $this->initialized['fulfillmentSet'] = true;
        $this->fulfillmentSet = $fulfillmentSet;
        return $this;
    }
}