<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCreateCart extends \ArrayObject
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
     * The ID of the cart's region. This affects the prices and currency of the cart.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The address's details.
     *
     * @var StoreCartAddress|null
     */
    protected $shippingAddress;
    /**
     * The address's details.
     *
     * @var StoreCartAddress|null
     */
    protected $billingAddress;
    /**
     * The email of the cart's customer.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The cart's currency code. If not provided, the region's currency is used. This affects prices in the cart, as well.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The cart's items.
     *
     * @var list<StoreCartLineItem>|null
     */
    protected $items;
    /**
     * The ID of the sales channel that cart is created in. Only products available in that sales channel can be added to the cart. If not provided, the store's default sales channel is associated with the cart instead.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The cart's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the cart's region. This affects the prices and currency of the cart.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the cart's region. This affects the prices and currency of the cart.
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
     * The address's details.
     *
     * @return StoreCartAddress|null
     */
    public function getShippingAddress(): ?StoreCartAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The address's details.
     *
     * @param StoreCartAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?StoreCartAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The address's details.
     *
     * @return StoreCartAddress|null
     */
    public function getBillingAddress(): ?StoreCartAddress
    {
        return $this->billingAddress;
    }
    /**
     * The address's details.
     *
     * @param StoreCartAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?StoreCartAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The email of the cart's customer.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email of the cart's customer.
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
     * The cart's currency code. If not provided, the region's currency is used. This affects prices in the cart, as well.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The cart's currency code. If not provided, the region's currency is used. This affects prices in the cart, as well.
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
     * The cart's items.
     *
     * @return list<StoreCartLineItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The cart's items.
     *
     * @param list<StoreCartLineItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The ID of the sales channel that cart is created in. Only products available in that sales channel can be added to the cart. If not provided, the store's default sales channel is associated with the cart instead.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the sales channel that cart is created in. Only products available in that sales channel can be added to the cart. If not provided, the store's default sales channel is associated with the cart instead.
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
     * The cart's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The cart's metadata, can hold custom key-value pairs.
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