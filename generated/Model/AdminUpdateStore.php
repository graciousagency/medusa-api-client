<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateStore extends \ArrayObject
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
     * The store's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The store's supported currencies.
     *
     * @var list<AdminUpdateStoreSupportedCurrenciesItem>|null
     */
    protected $supportedCurrencies;
    /**
     * The ID of the default sales channel in the store.
     *
     * @var string|null
     */
    protected $defaultSalesChannelId;
    /**
     * The ID of the default region in the store.
     *
     * @var string|null
     */
    protected $defaultRegionId;
    /**
     * The ID of the default stock location in the store.
     *
     * @var string|null
     */
    protected $defaultLocationId;
    /**
     * The store's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The store's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The store's name.
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
     * The store's supported currencies.
     *
     * @return list<AdminUpdateStoreSupportedCurrenciesItem>|null
     */
    public function getSupportedCurrencies(): ?array
    {
        return $this->supportedCurrencies;
    }
    /**
     * The store's supported currencies.
     *
     * @param list<AdminUpdateStoreSupportedCurrenciesItem>|null $supportedCurrencies
     *
     * @return self
     */
    public function setSupportedCurrencies(?array $supportedCurrencies): self
    {
        $this->initialized['supportedCurrencies'] = true;
        $this->supportedCurrencies = $supportedCurrencies;
        return $this;
    }
    /**
     * The ID of the default sales channel in the store.
     *
     * @return string|null
     */
    public function getDefaultSalesChannelId(): ?string
    {
        return $this->defaultSalesChannelId;
    }
    /**
     * The ID of the default sales channel in the store.
     *
     * @param string|null $defaultSalesChannelId
     *
     * @return self
     */
    public function setDefaultSalesChannelId(?string $defaultSalesChannelId): self
    {
        $this->initialized['defaultSalesChannelId'] = true;
        $this->defaultSalesChannelId = $defaultSalesChannelId;
        return $this;
    }
    /**
     * The ID of the default region in the store.
     *
     * @return string|null
     */
    public function getDefaultRegionId(): ?string
    {
        return $this->defaultRegionId;
    }
    /**
     * The ID of the default region in the store.
     *
     * @param string|null $defaultRegionId
     *
     * @return self
     */
    public function setDefaultRegionId(?string $defaultRegionId): self
    {
        $this->initialized['defaultRegionId'] = true;
        $this->defaultRegionId = $defaultRegionId;
        return $this;
    }
    /**
     * The ID of the default stock location in the store.
     *
     * @return string|null
     */
    public function getDefaultLocationId(): ?string
    {
        return $this->defaultLocationId;
    }
    /**
     * The ID of the default stock location in the store.
     *
     * @param string|null $defaultLocationId
     *
     * @return self
     */
    public function setDefaultLocationId(?string $defaultLocationId): self
    {
        $this->initialized['defaultLocationId'] = true;
        $this->defaultLocationId = $defaultLocationId;
        return $this;
    }
    /**
     * The store's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The store's metadata, can hold custom key-value pairs.
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