<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCurrencyResponse extends \ArrayObject
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
     * The currency's details.
     *
     * @var StoreCurrency|null
     */
    protected $currency;
    /**
     * The currency's details.
     *
     * @return StoreCurrency|null
     */
    public function getCurrency(): ?StoreCurrency
    {
        return $this->currency;
    }
    /**
     * The currency's details.
     *
     * @param StoreCurrency|null $currency
     *
     * @return self
     */
    public function setCurrency(?StoreCurrency $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
}