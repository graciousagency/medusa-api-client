<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStockLocation extends \ArrayObject
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
     * The location's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The location's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of the associated address.
     *
     * @var string|null
     */
    protected $addressId;
    /**
     * The details of the stock location address.
     *
     * @var AdminStockLocationAddress|null
     */
    protected $address;
    /**
     * The sales channels associated with the location.
     *
     * @var list<AdminSalesChannel>|null
     */
    protected $salesChannels;
    /**
     * The fulfillment providers associated with the location.
     *
     * @var list<AdminFulfillmentProvider>|null
     */
    protected $fulfillmentProviders;
    /**
     * The fulfillment sets associated with the location.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $fulfillmentSets;
    /**
     * The location's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The location's ID.
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
     * The location's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The location's name.
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
     * The ID of the associated address.
     *
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->addressId;
    }
    /**
     * The ID of the associated address.
     *
     * @param string|null $addressId
     *
     * @return self
     */
    public function setAddressId(?string $addressId): self
    {
        $this->initialized['addressId'] = true;
        $this->addressId = $addressId;
        return $this;
    }
    /**
     * The details of the stock location address.
     *
     * @return AdminStockLocationAddress|null
     */
    public function getAddress(): ?AdminStockLocationAddress
    {
        return $this->address;
    }
    /**
     * The details of the stock location address.
     *
     * @param AdminStockLocationAddress|null $address
     *
     * @return self
     */
    public function setAddress(?AdminStockLocationAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The sales channels associated with the location.
     *
     * @return list<AdminSalesChannel>|null
     */
    public function getSalesChannels(): ?array
    {
        return $this->salesChannels;
    }
    /**
     * The sales channels associated with the location.
     *
     * @param list<AdminSalesChannel>|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
    /**
     * The fulfillment providers associated with the location.
     *
     * @return list<AdminFulfillmentProvider>|null
     */
    public function getFulfillmentProviders(): ?array
    {
        return $this->fulfillmentProviders;
    }
    /**
     * The fulfillment providers associated with the location.
     *
     * @param list<AdminFulfillmentProvider>|null $fulfillmentProviders
     *
     * @return self
     */
    public function setFulfillmentProviders(?array $fulfillmentProviders): self
    {
        $this->initialized['fulfillmentProviders'] = true;
        $this->fulfillmentProviders = $fulfillmentProviders;
        return $this;
    }
    /**
     * The fulfillment sets associated with the location.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getFulfillmentSets(): ?array
    {
        return $this->fulfillmentSets;
    }
    /**
     * The fulfillment sets associated with the location.
     *
     * @param list<array<string, mixed>>|null $fulfillmentSets
     *
     * @return self
     */
    public function setFulfillmentSets(?array $fulfillmentSets): self
    {
        $this->initialized['fulfillmentSets'] = true;
        $this->fulfillmentSets = $fulfillmentSets;
        return $this;
    }
}