<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminServiceZone extends \ArrayObject
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
     * The service zone's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The service zone's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The service zone's fulfillment set id.
     *
     * @var string|null
     */
    protected $fulfillmentSetId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $fulfillmentSet;
    /**
     * The service zone's geo zones.
     *
     * @var list<AdminGeoZone>|null
     */
    protected $geoZones;
    /**
     * The service zone's shipping options.
     *
     * @var list<AdminShippingOption>|null
     */
    protected $shippingOptions;
    /**
     * The service zone's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The service zone's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The service zone's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The service zone's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The service zone's ID.
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
     * The service zone's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The service zone's name.
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
     * The service zone's fulfillment set id.
     *
     * @return string|null
     */
    public function getFulfillmentSetId(): ?string
    {
        return $this->fulfillmentSetId;
    }
    /**
     * The service zone's fulfillment set id.
     *
     * @param string|null $fulfillmentSetId
     *
     * @return self
     */
    public function setFulfillmentSetId(?string $fulfillmentSetId): self
    {
        $this->initialized['fulfillmentSetId'] = true;
        $this->fulfillmentSetId = $fulfillmentSetId;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getFulfillmentSet(): ?iterable
    {
        return $this->fulfillmentSet;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $fulfillmentSet
     *
     * @return self
     */
    public function setFulfillmentSet(?iterable $fulfillmentSet): self
    {
        $this->initialized['fulfillmentSet'] = true;
        $this->fulfillmentSet = $fulfillmentSet;
        return $this;
    }
    /**
     * The service zone's geo zones.
     *
     * @return list<AdminGeoZone>|null
     */
    public function getGeoZones(): ?array
    {
        return $this->geoZones;
    }
    /**
     * The service zone's geo zones.
     *
     * @param list<AdminGeoZone>|null $geoZones
     *
     * @return self
     */
    public function setGeoZones(?array $geoZones): self
    {
        $this->initialized['geoZones'] = true;
        $this->geoZones = $geoZones;
        return $this;
    }
    /**
     * The service zone's shipping options.
     *
     * @return list<AdminShippingOption>|null
     */
    public function getShippingOptions(): ?array
    {
        return $this->shippingOptions;
    }
    /**
     * The service zone's shipping options.
     *
     * @param list<AdminShippingOption>|null $shippingOptions
     *
     * @return self
     */
    public function setShippingOptions(?array $shippingOptions): self
    {
        $this->initialized['shippingOptions'] = true;
        $this->shippingOptions = $shippingOptions;
        return $this;
    }
    /**
     * The service zone's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The service zone's created at.
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
     * The service zone's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The service zone's updated at.
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
     * The service zone's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The service zone's deleted at.
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