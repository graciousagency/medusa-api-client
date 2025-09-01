<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCurrencyResponse extends \ArrayObject
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
     * The currency's currencies.
     *
     * @var AdminCurrency|null
     */
    protected $currency;
    /**
     * The currency's currencies.
     *
     * @return AdminCurrency|null
     */
    public function getCurrency(): ?AdminCurrency
    {
        return $this->currency;
    }
    /**
     * The currency's currencies.
     *
     * @param AdminCurrency|null $currency
     *
     * @return self
     */
    public function setCurrency(?AdminCurrency $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}