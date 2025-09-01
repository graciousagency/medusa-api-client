<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateReservation extends \ArrayObject
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
     * The ID of the associated location.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The reserved quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The reservation's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The reservation's metadata. Can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the associated location.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the associated location.
     *
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * The reserved quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The reserved quantity.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The reservation's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The reservation's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The reservation's metadata. Can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The reservation's metadata. Can hold custom key-value pairs.
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