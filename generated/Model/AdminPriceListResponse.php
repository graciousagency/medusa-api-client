<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPriceListResponse extends \ArrayObject
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
     * The price list's details.
     *
     * @var AdminPriceList|null
     */
    protected $priceList;
    /**
     * The price list's details.
     *
     * @return AdminPriceList|null
     */
    public function getPriceList(): ?AdminPriceList
    {
        return $this->priceList;
    }
    /**
     * The price list's details.
     *
     * @param AdminPriceList|null $priceList
     *
     * @return self
     */
    public function setPriceList(?AdminPriceList $priceList): self
    {
        $this->initialized['priceList'] = true;
        $this->priceList = $priceList;
        return $this;
    }
}