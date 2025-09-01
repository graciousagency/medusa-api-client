<?php

namespace Gracious\MedusaApiClientBundle\Model;

class UpdateCartData extends \ArrayObject
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
     * The ID of the associated region. This can affect the prices and currency code of the cart.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The ID of the customer that the cart belongs to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The ID of the associated sales channel. Only products available in this channel can be added to the cart.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The email of the customer that the cart belongs to.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The cart's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The ID of the cart's shipping address.
     *
     * @var string|null
     */
    protected $shippingAddressId;
    /**
     * The ID of the cart's billing address.
     *
     * @var string|null
     */
    protected $billingAddressId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $billingAddress;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $shippingAddress;
    /**
     * The cart's metadata, ca hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the associated region. This can affect the prices and currency code of the cart.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the associated region. This can affect the prices and currency code of the cart.
     *
     * @param string|null $regionId
     *
     * @return self
     */
    public function setRegionId(?string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * The ID of the customer that the cart belongs to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer that the cart belongs to.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The ID of the associated sales channel. Only products available in this channel can be added to the cart.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the associated sales channel. Only products available in this channel can be added to the cart.
     *
     * @param string|null $salesChannelId
     *
     * @return self
     */
    public function setSalesChannelId(?string $salesChannelId): self
    {
        $this->initialized['salesChannelId'] = true;
        $this->salesChannelId = $salesChannelId;
        return $this;
    }
    /**
     * The email of the customer that the cart belongs to.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email of the customer that the cart belongs to.
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
     * The cart's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The cart's currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The ID of the cart's shipping address.
     *
     * @return string|null
     */
    public function getShippingAddressId(): ?string
    {
        return $this->shippingAddressId;
    }
    /**
     * The ID of the cart's shipping address.
     *
     * @param string|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?string $shippingAddressId): self
    {
        $this->initialized['shippingAddressId'] = true;
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * The ID of the cart's billing address.
     *
     * @return string|null
     */
    public function getBillingAddressId(): ?string
    {
        return $this->billingAddressId;
    }
    /**
     * The ID of the cart's billing address.
     *
     * @param string|null $billingAddressId
     *
     * @return self
     */
    public function setBillingAddressId(?string $billingAddressId): self
    {
        $this->initialized['billingAddressId'] = true;
        $this->billingAddressId = $billingAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * 
     *
     * @param mixed $billingAddress
     *
     * @return self
     */
    public function setBillingAddress($billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }
    /**
     * 
     *
     * @param mixed $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress($shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The cart's metadata, ca hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The cart's metadata, ca hold custom key-value pairs.
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