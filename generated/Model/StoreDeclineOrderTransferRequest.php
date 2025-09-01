<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreDeclineOrderTransferRequest extends \ArrayObject
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
     * The order transfer's token issued when the transfer was requested.
     *
     * @var string|null
     */
    protected $token;
    /**
     * The order transfer's token issued when the transfer was requested.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * The order transfer's token issued when the transfer was requested.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}