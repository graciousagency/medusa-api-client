<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStoreResponse extends \ArrayObject
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
     * The store's details.
     *
     * @var AdminStore|null
     */
    protected $store;
    /**
     * The store's details.
     *
     * @return AdminStore|null
     */
    public function getStore(): ?AdminStore
    {
        return $this->store;
    }
    /**
     * The store's details.
     *
     * @param AdminStore|null $store
     *
     * @return self
     */
    public function setStore(?AdminStore $store): self
    {
        $this->initialized['store'] = true;
        $this->store = $store;
        return $this;
    }
}