<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStore extends \ArrayObject
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
     * The store's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The store's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The store's supported currencies.
     *
     * @var list<AdminStoreCurrency>|null
     */
    protected $supportedCurrencies;
    /**
     * The ID of the sales channel used by default in the store.
     *
     * @var string|null
     */
    protected $defaultSalesChannelId;
    /**
     * The ID of the region used by default in the store.
     *
     * @var string|null
     */
    protected $defaultRegionId;
    /**
     * The ID of the stock location used by default in the store.
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
     * The date the store was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the store was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The store's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The store's ID.
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
     * @return list<AdminStoreCurrency>|null
     */
    public function getSupportedCurrencies(): ?array
    {
        return $this->supportedCurrencies;
    }
    /**
     * The store's supported currencies.
     *
     * @param list<AdminStoreCurrency>|null $supportedCurrencies
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
     * The ID of the sales channel used by default in the store.
     *
     * @return string|null
     */
    public function getDefaultSalesChannelId(): ?string
    {
        return $this->defaultSalesChannelId;
    }
    /**
     * The ID of the sales channel used by default in the store.
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
     * The ID of the region used by default in the store.
     *
     * @return string|null
     */
    public function getDefaultRegionId(): ?string
    {
        return $this->defaultRegionId;
    }
    /**
     * The ID of the region used by default in the store.
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
     * The ID of the stock location used by default in the store.
     *
     * @return string|null
     */
    public function getDefaultLocationId(): ?string
    {
        return $this->defaultLocationId;
    }
    /**
     * The ID of the stock location used by default in the store.
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
    /**
     * The date the store was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the store was created.
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
     * The date the store was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the store was updated.
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
}