<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateStockLocation extends \ArrayObject
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
     * The stock location's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The stock location's address. Pass this property if you're creating a new address to associate with the location.
     *
     * @var AdminUpdateStockLocationAddress|null
     */
    protected $address;
    /**
     * The ID of an existing stock location address to associate the stock location with.
     *
     * @var string|null
     */
    protected $addressId;
    /**
     * The stock location's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The stock location's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The stock location's name.
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
     * The stock location's address. Pass this property if you're creating a new address to associate with the location.
     *
     * @return AdminUpdateStockLocationAddress|null
     */
    public function getAddress(): ?AdminUpdateStockLocationAddress
    {
        return $this->address;
    }
    /**
     * The stock location's address. Pass this property if you're creating a new address to associate with the location.
     *
     * @param AdminUpdateStockLocationAddress|null $address
     *
     * @return self
     */
    public function setAddress(?AdminUpdateStockLocationAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The ID of an existing stock location address to associate the stock location with.
     *
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->addressId;
    }
    /**
     * The ID of an existing stock location address to associate the stock location with.
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
     * The stock location's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The stock location's metadata, can hold custom key-value pairs.
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