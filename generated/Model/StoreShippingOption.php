<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreShippingOption extends \ArrayObject
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
     * @var BaseFulfillmentProvider|null
     */
    protected $provider;
    /**
     * The ID of the shipping option's type.
     *
     * @var string|null
     */
    protected $shippingOptionTypeId;
    /**
     * The shipping option type's details.
     *
     * @var StoreShippingOptionType|null
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
     * Whether the amount includes taxes.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The shipping option's data, useful for the provider handling fulfillment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The shipping option's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * @return BaseFulfillmentProvider|null
     */
    public function getProvider(): ?BaseFulfillmentProvider
    {
        return $this->provider;
    }
    /**
     * The fulfillment provider's details.
     *
     * @param BaseFulfillmentProvider|null $provider
     *
     * @return self
     */
    public function setProvider(?BaseFulfillmentProvider $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * The ID of the shipping option's type.
     *
     * @return string|null
     */
    public function getShippingOptionTypeId(): ?string
    {
        return $this->shippingOptionTypeId;
    }
    /**
     * The ID of the shipping option's type.
     *
     * @param string|null $shippingOptionTypeId
     *
     * @return self
     */
    public function setShippingOptionTypeId(?string $shippingOptionTypeId): self
    {
        $this->initialized['shippingOptionTypeId'] = true;
        $this->shippingOptionTypeId = $shippingOptionTypeId;
        return $this;
    }
    /**
     * The shipping option type's details.
     *
     * @return StoreShippingOptionType|null
     */
    public function getType(): ?StoreShippingOptionType
    {
        return $this->type;
    }
    /**
     * The shipping option type's details.
     *
     * @param StoreShippingOptionType|null $type
     *
     * @return self
     */
    public function setType(?StoreShippingOptionType $type): self
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
     * Whether the amount includes taxes.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the amount includes taxes.
     *
     * @param bool|null $isTaxInclusive
     *
     * @return self
     */
    public function setIsTaxInclusive(?bool $isTaxInclusive): self
    {
        $this->initialized['isTaxInclusive'] = true;
        $this->isTaxInclusive = $isTaxInclusive;
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
     * The shipping option's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipping option's metadata, can hold custom key-value pairs.
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