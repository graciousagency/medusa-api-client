<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPricePreferenceResponse extends \ArrayObject
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
     * The price preference's details.
     *
     * @var AdminPricePreference|null
     */
    protected $pricePreference;
    /**
     * The price preference's details.
     *
     * @return AdminPricePreference|null
     */
    public function getPricePreference(): ?AdminPricePreference
    {
        return $this->pricePreference;
    }
    /**
     * The price preference's details.
     *
     * @param AdminPricePreference|null $pricePreference
     *
     * @return self
     */
    public function setPricePreference(?AdminPricePreference $pricePreference): self
    {
        $this->initialized['pricePreference'] = true;
        $this->pricePreference = $pricePreference;
        return $this;
    }
}