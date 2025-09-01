<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StorePaymentCollectionResponse extends \ArrayObject
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
     * The payment collection's details.
     *
     * @var StorePaymentCollection|null
     */
    protected $paymentCollection;
    /**
     * The payment collection's details.
     *
     * @return StorePaymentCollection|null
     */
    public function getPaymentCollection(): ?StorePaymentCollection
    {
        return $this->paymentCollection;
    }
    /**
     * The payment collection's details.
     *
     * @param StorePaymentCollection|null $paymentCollection
     *
     * @return self
     */
    public function setPaymentCollection(?StorePaymentCollection $paymentCollection): self
    {
        $this->initialized['paymentCollection'] = true;
        $this->paymentCollection = $paymentCollection;
        return $this;
    }
}