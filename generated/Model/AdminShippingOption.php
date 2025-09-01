<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOption extends \ArrayObject
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
     * The ID of the service zone this option belongs to.
     *
     * @var string|null
     */
    protected $serviceZoneId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $serviceZone;
    /**
     * The ID of the provider handling fulfillments created from this shipping option.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The fulfillment provider's details.
     *
     * @var AdminFulfillmentProvider|null
     */
    protected $provider;
    /**
     * The ID of the associated shipping option type.
     *
     * @var string|null
     */
    protected $shippingOptionTypeId;
    /**
     * The shipping option's details.
     *
     * @var AdminShippingOptionType|null
     */
    protected $type;
    /**
     * The ID of the associated shipping profile.
     *
     * @var string|null
     */
    protected $shippingProfileId;
    /**
     * The shipping profile's details..
     *
     * @var AdminShippingProfile|null
     */
    protected $shippingProfile;
    /**
     * The shipping option's rules.
     *
     * @var list<AdminShippingOptionRule>|null
     */
    protected $rules;
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, this array will be empty since the price is calculated by the fulfillment provider during checkout.
     *
     * @var list<AdminShippingOptionPrice>|null
     */
    protected $prices;
    /**
     * The shipping option's data, useful for the fulfillment provider handling fulfillments created from this option.
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
     * The date the shipping option was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the shipping option was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the shipping option was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
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
     * The ID of the service zone this option belongs to.
     *
     * @return string|null
     */
    public function getServiceZoneId(): ?string
    {
        return $this->serviceZoneId;
    }
    /**
     * The ID of the service zone this option belongs to.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getServiceZone(): ?iterable
    {
        return $this->serviceZone;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $serviceZone
     *
     * @return self
     */
    public function setServiceZone(?iterable $serviceZone): self
    {
        $this->initialized['serviceZone'] = true;
        $this->serviceZone = $serviceZone;
        return $this;
    }
    /**
     * The ID of the provider handling fulfillments created from this shipping option.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the provider handling fulfillments created from this shipping option.
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
     * @return AdminFulfillmentProvider|null
     */
    public function getProvider(): ?AdminFulfillmentProvider
    {
        return $this->provider;
    }
    /**
     * The fulfillment provider's details.
     *
     * @param AdminFulfillmentProvider|null $provider
     *
     * @return self
     */
    public function setProvider(?AdminFulfillmentProvider $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * The ID of the associated shipping option type.
     *
     * @return string|null
     */
    public function getShippingOptionTypeId(): ?string
    {
        return $this->shippingOptionTypeId;
    }
    /**
     * The ID of the associated shipping option type.
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
     * The shipping option's details.
     *
     * @return AdminShippingOptionType|null
     */
    public function getType(): ?AdminShippingOptionType
    {
        return $this->type;
    }
    /**
     * The shipping option's details.
     *
     * @param AdminShippingOptionType|null $type
     *
     * @return self
     */
    public function setType(?AdminShippingOptionType $type): self
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
     * The shipping profile's details..
     *
     * @return AdminShippingProfile|null
     */
    public function getShippingProfile(): ?AdminShippingProfile
    {
        return $this->shippingProfile;
    }
    /**
     * The shipping profile's details..
     *
     * @param AdminShippingProfile|null $shippingProfile
     *
     * @return self
     */
    public function setShippingProfile(?AdminShippingProfile $shippingProfile): self
    {
        $this->initialized['shippingProfile'] = true;
        $this->shippingProfile = $shippingProfile;
        return $this;
    }
    /**
     * The shipping option's rules.
     *
     * @return list<AdminShippingOptionRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The shipping option's rules.
     *
     * @param list<AdminShippingOptionRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, this array will be empty since the price is calculated by the fulfillment provider during checkout.
     *
     * @return list<AdminShippingOptionPrice>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, this array will be empty since the price is calculated by the fulfillment provider during checkout.
     *
     * @param list<AdminShippingOptionPrice>|null $prices
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
     * The shipping option's data, useful for the fulfillment provider handling fulfillments created from this option.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping option's data, useful for the fulfillment provider handling fulfillments created from this option.
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
    /**
     * The date the shipping option was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the shipping option was created.
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The date the shipping option was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the shipping option was updated.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The date the shipping option was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the shipping option was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}