<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreStoreCreditAccountResponse extends \ArrayObject
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
     * The store credit account's details.
     *
     * @var StoreStoreCreditAccount|null
     */
    protected $storeCreditAccount;
    /**
     * The store credit account's details.
     *
     * @return StoreStoreCreditAccount|null
     */
    public function getStoreCreditAccount(): ?StoreStoreCreditAccount
    {
        return $this->storeCreditAccount;
    }
    /**
     * The store credit account's details.
     *
     * @param StoreStoreCreditAccount|null $storeCreditAccount
     *
     * @return self
     */
    public function setStoreCreditAccount(?StoreStoreCreditAccount $storeCreditAccount): self
    {
        $this->initialized['storeCreditAccount'] = true;
        $this->storeCreditAccount = $storeCreditAccount;
        return $this;
    }
}