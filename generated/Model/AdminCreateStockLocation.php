<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateStockLocation extends \ArrayObject
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
     * The ID of the stock location's address.
     *
     * @var string|null
     */
    protected $addressId;
    /**
     * The details of the stock location address to create.
     *
     * @var AdminUpsertStockLocationAddress|null
     */
    protected $address;
    /**
     * The stock location's metadata, used to store custom key-value pairs.
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
     * The ID of the stock location's address.
     *
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->addressId;
    }
    /**
     * The ID of the stock location's address.
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
     * The details of the stock location address to create.
     *
     * @return AdminUpsertStockLocationAddress|null
     */
    public function getAddress(): ?AdminUpsertStockLocationAddress
    {
        return $this->address;
    }
    /**
     * The details of the stock location address to create.
     *
     * @param AdminUpsertStockLocationAddress|null $address
     *
     * @return self
     */
    public function setAddress(?AdminUpsertStockLocationAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The stock location's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The stock location's metadata, used to store custom key-value pairs.
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