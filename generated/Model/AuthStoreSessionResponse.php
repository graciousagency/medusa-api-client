<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthStoreSessionResponse extends \ArrayObject
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
     * The customer's details.
     *
     * @var StoreCustomer|null
     */
    protected $user;
    /**
     * The customer's details.
     *
     * @return StoreCustomer|null
     */
    public function getUser(): ?StoreCustomer
    {
        return $this->user;
    }
    /**
     * The customer's details.
     *
     * @param StoreCustomer|null $user
     *
     * @return self
     */
    public function setUser(?StoreCustomer $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}