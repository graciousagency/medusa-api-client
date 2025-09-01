<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateShippingOption extends \ArrayObject
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
     * The shipping option's data that is useful for third-party providers.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The type of the shipping option's price. If `calculated`, its price is retrieved by the  associated fulfillment provider during checkout. If `flat`, its price is set in the `prices` property.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * The ID of the associated fulfillment provider that is used to process the option.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The ID of the shipping profile this shipping option belongs to.
     *
     * @var string|null
     */
    protected $shippingProfileId;
    /**
     * The shipping option's type.
     *
     * @var AdminUpdateShippingOptionType|null
     */
    protected $type;
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, pass an empty array.
     *
     * @var list<mixed>|null
     */
    protected $prices;
    /**
     * The shipping option's rules.
     *
     * @var list<mixed>|null
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
     * The shipping option's data that is useful for third-party providers.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping option's data that is useful for third-party providers.
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
     * The type of the shipping option's price. If `calculated`, its price is retrieved by the  associated fulfillment provider during checkout. If `flat`, its price is set in the `prices` property.
     *
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * The type of the shipping option's price. If `calculated`, its price is retrieved by the  associated fulfillment provider during checkout. If `flat`, its price is set in the `prices` property.
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
     * The ID of the associated fulfillment provider that is used to process the option.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the associated fulfillment provider that is used to process the option.
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
     * The ID of the shipping profile this shipping option belongs to.
     *
     * @return string|null
     */
    public function getShippingProfileId(): ?string
    {
        return $this->shippingProfileId;
    }
    /**
     * The ID of the shipping profile this shipping option belongs to.
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
     * The shipping option's type.
     *
     * @return AdminUpdateShippingOptionType|null
     */
    public function getType(): ?AdminUpdateShippingOptionType
    {
        return $this->type;
    }
    /**
     * The shipping option's type.
     *
     * @param AdminUpdateShippingOptionType|null $type
     *
     * @return self
     */
    public function setType(?AdminUpdateShippingOptionType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, pass an empty array.
     *
     * @return list<mixed>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The shipping option's prices. If the `price_type` is `calculated`, pass an empty array.
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
     * @return list<mixed>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The shipping option's rules.
     *
     * @param list<mixed>|null $rules
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