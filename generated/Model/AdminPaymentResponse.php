<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPaymentResponse extends \ArrayObject
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
     * The payment's details.
     *
     * @var AdminPayment|null
     */
    protected $payment;
    /**
     * The payment's details.
     *
     * @return AdminPayment|null
     */
    public function getPayment(): ?AdminPayment
    {
        return $this->payment;
    }
    /**
     * The payment's details.
     *
     * @param AdminPayment|null $payment
     *
     * @return self
     */
    public function setPayment(?AdminPayment $payment): self
    {
        $this->initialized['payment'] = true;
        $this->payment = $payment;
        return $this;
    }
}