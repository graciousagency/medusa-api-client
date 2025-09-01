<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartShippingOption extends \ArrayObject
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
     * The shipping option's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The shipping option's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The shipping option's price type. If it's `flat`, the price is fixed and is set in the `prices` property. If it's `calculated`, the price is calculated on checkout by the associated fulfillment provider.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * The ID of the service zone the shipping option belongs to.
     *
     * @var string|null
     */
    protected $serviceZoneId;
    /**
     * The ID of the fulfillment provider handling this option.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The fulfillment provider's details.
     *
     * @var StoreCartShippingOptionProvider|null
     */
    protected $provider;
    /**
     * The shipping option type's details.
     *
     * @var StoreCartShippingOptionType|null
     */
    protected $type;
    /**
     * The ID of the associated shipping profile.
     *
     * @var string|null
     */
    protected $shippingProfileId;
    /**
     * The shipping option's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The shipping option's data, useful for the provider handling fulfillment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The shipping option's prices.
     *
     * @var list<StorePrice>|null
     */
    protected $prices;
    /**
     * The shipping option's calculated price.
     *
     * @var StoreCalculatedPrice|null
     */
    protected $calculatedPrice;
    /**
     * Whether the shipping option's location doesn't have sufficient quantity for any of the cart's items.
     *
     * @var bool|null
     */
    protected $insufficientInventory;
    /**
     * The shipping option's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The shipping option's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The shipping option's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The shipping option's name.
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
     * The shipping option's price type. If it's `flat`, the price is fixed and is set in the `prices` property. If it's `calculated`, the price is calculated on checkout by the associated fulfillment provider.
     *
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * The shipping option's price type. If it's `flat`, the price is fixed and is set in the `prices` property. If it's `calculated`, the price is calculated on checkout by the associated fulfillment provider.
     *
     * @param string|null $priceType
     *
     * @return self
     */
    public function setPriceType(?string $priceType): self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * The ID of the service zone the shipping option belongs to.
     *
     * @return string|null
     */
    public function getServiceZoneId(): ?string
    {
        return $this->serviceZoneId;
    }
    /**
     * The ID of the service zone the shipping option belongs to.
     *
     * @param string|null $serviceZoneId
     *
     * @return self
     */
    public function setServiceZoneId(?string $serviceZoneId): self
    {
        $this->initialized['serviceZoneId'] = true;
        $this->serviceZoneId = $serviceZoneId;
        return $this;
    }
    /**
     * The ID of the fulfillment provider handling this option.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the fulfillment provider handling this option.
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
     * The fulfillment provider's details.
     *
     * @return StoreCartShippingOptionProvider|null
     */
    public function getProvider(): ?StoreCartShippingOptionProvider
    {
        return $this->provider;
    }
    /**
     * The fulfillment provider's details.
     *
     * @param StoreCartShippingOptionProvider|null $provider
     *
     * @return self
     */
    public function setProvider(?StoreCartShippingOptionProvider $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * The shipping option type's details.
     *
     * @return StoreCartShippingOptionType|null
     */
    public function getType(): ?StoreCartShippingOptionType
    {
        return $this->type;
    }
    /**
     * The shipping option type's details.
     *
     * @param StoreCartShippingOptionType|null $type
     *
     * @return self
     */
    public function setType(?StoreCartShippingOptionType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The ID of the associated shipping profile.
     *
     * @return string|null
     */
    public function getShippingProfileId(): ?string
    {
        return $this->shippingProfileId;
    }
    /**
     * The ID of the associated shipping profile.
     *
     * @param string|null $shippingProfileId
     *
     * @return self
     */
    public function setShippingProfileId(?string $shippingProfileId): self
    {
        $this->initialized['shippingProfileId'] = true;
        $this->shippingProfileId = $shippingProfileId;
        return $this;
    }
    /**
     * The shipping option's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The shipping option's amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The shipping option's data, useful for the provider handling fulfillment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping option's data, useful for the provider handling fulfillment.
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
     * The shipping option's prices.
     *
     * @return list<StorePrice>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The shipping option's prices.
     *
     * @param list<StorePrice>|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * The shipping option's calculated price.
     *
     * @return StoreCalculatedPrice|null
     */
    public function getCalculatedPrice(): ?StoreCalculatedPrice
    {
        return $this->calculatedPrice;
    }
    /**
     * The shipping option's calculated price.
     *
     * @param StoreCalculatedPrice|null $calculatedPrice
     *
     * @return self
     */
    public function setCalculatedPrice(?StoreCalculatedPrice $calculatedPrice): self
    {
        $this->initialized['calculatedPrice'] = true;
        $this->calculatedPrice = $calculatedPrice;
        return $this;
    }
    /**
     * Whether the shipping option's location doesn't have sufficient quantity for any of the cart's items.
     *
     * @return bool|null
     */
    public function getInsufficientInventory(): ?bool
    {
        return $this->insufficientInventory;
    }
    /**
     * Whether the shipping option's location doesn't have sufficient quantity for any of the cart's items.
     *
     * @param bool|null $insufficientInventory
     *
     * @return self
     */
    public function setInsufficientInventory(?bool $insufficientInventory): self
    {
        $this->initialized['insufficientInventory'] = true;
        $this->insufficientInventory = $insufficientInventory;
        return $this;
    }
}