<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateShippingOption extends \ArrayObject
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
     * The shipping option's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of the associated service zone.
     *
     * @var string|null
     */
    protected $serviceZoneId;
    /**
     * The ID of the associated shipping profile.
     *
     * @var string|null
     */
    protected $shippingProfileId;
    /**
     * The shipping option's data, useful for the fulfillment provider handling its processing.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The shipping option's price type. If `flat`, the shipping option has a fixed price set in `prices`. Otherwise, the shipping option's price is calculated by the fulfillment provider.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * The ID of the fulfillment provider handling this shipping option.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The shipping option type's details.
     *
     * @var AdminCreateShippingOptionType|null
     */
    protected $type;
    /**
     * The shipping option's prices.
     *
     * @var list<mixed>|null
     */
    protected $prices;
    /**
     * The shipping option's rules.
     *
     * @var list<AdminCreateShippingOptionRule>|null
     */
    protected $rules;
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
     * The ID of the associated service zone.
     *
     * @return string|null
     */
    public function getServiceZoneId(): ?string
    {
        return $this->serviceZoneId;
    }
    /**
     * The ID of the associated service zone.
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
     * The shipping option's data, useful for the fulfillment provider handling its processing.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping option's data, useful for the fulfillment provider handling its processing.
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
     * The shipping option's price type. If `flat`, the shipping option has a fixed price set in `prices`. Otherwise, the shipping option's price is calculated by the fulfillment provider.
     *
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * The shipping option's price type. If `flat`, the shipping option has a fixed price set in `prices`. Otherwise, the shipping option's price is calculated by the fulfillment provider.
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
     * The ID of the fulfillment provider handling this shipping option.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the fulfillment provider handling this shipping option.
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
     * The shipping option type's details.
     *
     * @return AdminCreateShippingOptionType|null
     */
    public function getType(): ?AdminCreateShippingOptionType
    {
        return $this->type;
    }
    /**
     * The shipping option type's details.
     *
     * @param AdminCreateShippingOptionType|null $type
     *
     * @return self
     */
    public function setType(?AdminCreateShippingOptionType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The shipping option's prices.
     *
     * @return list<mixed>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The shipping option's prices.
     *
     * @param list<mixed>|null $prices
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
     * The shipping option's rules.
     *
     * @return list<AdminCreateShippingOptionRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The shipping option's rules.
     *
     * @param list<AdminCreateShippingOptionRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}