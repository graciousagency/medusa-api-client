<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCollectionResponse extends \ArrayObject
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
     * The collection's details.
     *
     * @var StoreCollection|null
     */
    protected $collection;
    /**
     * The collection's details.
     *
     * @return StoreCollection|null
     */
    public function getCollection(): ?StoreCollection
    {
        return $this->collection;
    }
    /**
     * The collection's details.
     *
     * @param StoreCollection|null $collection
     *
     * @return self
     */
    public function setCollection(?StoreCollection $collection): self
    {
        $this->initialized['collection'] = true;
        $this->collection = $collection;
        return $this;
    }
}