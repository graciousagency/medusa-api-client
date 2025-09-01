<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStockLocationsIdFulfillmentProvidersPostBody extends \ArrayObject
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
     * The fulfillment providers to add to the stock location.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The fulfillment providers to remove from the stock location.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The fulfillment providers to add to the stock location.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The fulfillment providers to add to the stock location.
     *
     * @param list<string>|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * The fulfillment providers to remove from the stock location.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The fulfillment providers to remove from the stock location.
     *
     * @param list<string>|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}