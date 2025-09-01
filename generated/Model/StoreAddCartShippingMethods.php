<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreAddCartShippingMethods extends \ArrayObject
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
     * The ID of the shipping option this method is created from.
     *
     * @var string|null
     */
    protected $optionId;
    /**
     * Any additional data relevant for the third-party fulfillment provider to process the shipment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The ID of the shipping option this method is created from.
     *
     * @return string|null
     */
    public function getOptionId(): ?string
    {
        return $this->optionId;
    }
    /**
     * The ID of the shipping option this method is created from.
     *
     * @param string|null $optionId
     *
     * @return self
     */
    public function setOptionId(?string $optionId): self
    {
        $this->initialized['optionId'] = true;
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Any additional data relevant for the third-party fulfillment provider to process the shipment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Any additional data relevant for the third-party fulfillment provider to process the shipment.
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