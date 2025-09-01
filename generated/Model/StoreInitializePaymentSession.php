<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreInitializePaymentSession extends \ArrayObject
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
     * The ID of the payment provider the customer chose.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * Any data necessary for the payment provider to process the payment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The ID of the payment provider the customer chose.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the payment provider the customer chose.
     *
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * Any data necessary for the payment provider to process the payment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Any data necessary for the payment provider to process the payment.
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}