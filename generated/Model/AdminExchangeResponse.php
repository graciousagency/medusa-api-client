<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminExchangeResponse extends \ArrayObject
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
     * The exchange's details.
     *
     * @var AdminExchange|null
     */
    protected $exchange;
    /**
     * The exchange's details.
     *
     * @return AdminExchange|null
     */
    public function getExchange(): ?AdminExchange
    {
        return $this->exchange;
    }
    /**
     * The exchange's details.
     *
     * @param AdminExchange|null $exchange
     *
     * @return self
     */
    public function setExchange(?AdminExchange $exchange): self
    {
        $this->initialized['exchange'] = true;
        $this->exchange = $exchange;
        return $this;
    }
}