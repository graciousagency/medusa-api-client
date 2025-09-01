<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateOrder extends \ArrayObject
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
     * The order's email.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The order's shipping address.
     *
     * @var AdminUpdateOrderShippingAddress|null
     */
    protected $shippingAddress;
    /**
     * The order's billing address.
     *
     * @var AdminUpdateOrderBillingAddress|null
     */
    protected $billingAddress;
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The order's email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The order's email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The order's shipping address.
     *
     * @return AdminUpdateOrderShippingAddress|null
     */
    public function getShippingAddress(): ?AdminUpdateOrderShippingAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The order's shipping address.
     *
     * @param AdminUpdateOrderShippingAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?AdminUpdateOrderShippingAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The order's billing address.
     *
     * @return AdminUpdateOrderBillingAddress|null
     */
    public function getBillingAddress(): ?AdminUpdateOrderBillingAddress
    {
        return $this->billingAddress;
    }
    /**
     * The order's billing address.
     *
     * @param AdminUpdateOrderBillingAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?AdminUpdateOrderBillingAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @param array<string, mixed>|null $metadata
     *
     * @return self
     */
    public function setMetadata(?iterable $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
}