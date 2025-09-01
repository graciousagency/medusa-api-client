<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStoreCreditAccountResponse extends \ArrayObject
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
     * @var AdminStoreCreditAccount|null
     */
    protected $storeCreditAccount;
    /**
     * The store credit account's details.
     *
     * @return AdminStoreCreditAccount|null
     */
    public function getStoreCreditAccount(): ?AdminStoreCreditAccount
    {
        return $this->storeCreditAccount;
    }
    /**
     * The store credit account's details.
     *
     * @param AdminStoreCreditAccount|null $storeCreditAccount
     *
     * @return self
     */
    public function setStoreCreditAccount(?AdminStoreCreditAccount $storeCreditAccount): self
    {
        $this->initialized['storeCreditAccount'] = true;
        $this->storeCreditAccount = $storeCreditAccount;
        return $this;
    }
}