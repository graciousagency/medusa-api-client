<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCollectionResponse extends \ArrayObject
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
     * The product collection's details.
     *
     * @var AdminCollection|null
     */
    protected $collection;
    /**
     * The product collection's details.
     *
     * @return AdminCollection|null
     */
    public function getCollection(): ?AdminCollection
    {
        return $this->collection;
    }
    /**
     * The product collection's details.
     *
     * @param AdminCollection|null $collection
     *
     * @return self
     */
    public function setCollection(?AdminCollection $collection): self
    {
        $this->initialized['collection'] = true;
        $this->collection = $collection;
        return $this;
    }
}