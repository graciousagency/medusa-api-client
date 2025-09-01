<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPaymentCollectionResponse extends \ArrayObject
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
     * @var AdminPaymentCollection|null
     */
    protected $paymentCollection;
    /**
     * The payment collection's details.
     *
     * @return AdminPaymentCollection|null
     */
    public function getPaymentCollection(): ?AdminPaymentCollection
    {
        return $this->paymentCollection;
    }
    /**
     * The payment collection's details.
     *
     * @param AdminPaymentCollection|null $paymentCollection
     *
     * @return self
     */
    public function setPaymentCollection(?AdminPaymentCollection $paymentCollection): self
    {
        $this->initialized['paymentCollection'] = true;
        $this->paymentCollection = $paymentCollection;
        return $this;
    }
}