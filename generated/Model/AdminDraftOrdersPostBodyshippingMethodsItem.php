<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminDraftOrdersPostBodyshippingMethodsItem extends \ArrayObject
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
     * The ID of an existing shipping method.
     *
     * @var string|null
     */
    protected $shippingMethodId;
    /**
     * The shipping method's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of the shipping option this method is created from.
     *
     * @var string|null
     */
    protected $optionId;
    /**
     * The shipping method's data, useful for fulfillment providers.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $amount;
    /**
     * The ID of an existing shipping method.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The ID of an existing shipping method.
     *
     * @param string|null $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(?string $shippingMethodId): self
    {
        $this->initialized['shippingMethodId'] = true;
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * The shipping method's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The shipping method's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
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
     * The shipping method's data, useful for fulfillment providers.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping method's data, useful for fulfillment providers.
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
    /**
     * 
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param mixed $amount
     *
     * @return self
     */
    public function setAmount($amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}