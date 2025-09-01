<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentSet extends \ArrayObject
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
     * The fulfillment set's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The fulfillment set's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The fulfillment set's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The stock location's details.
     *
     * @var AdminStockLocation|null
     */
    protected $location;
    /**
     * The fulfillment set's service zones.
     *
     * @var list<AdminServiceZone>|null
     */
    protected $serviceZones;
    /**
     * The fulfillment set's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The fulfillment set's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The fulfillment set's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The fulfillment set's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The fulfillment set's ID.
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
     * The fulfillment set's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The fulfillment set's name.
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
     * The fulfillment set's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The fulfillment set's type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The stock location's details.
     *
     * @return AdminStockLocation|null
     */
    public function getLocation(): ?AdminStockLocation
    {
        return $this->location;
    }
    /**
     * The stock location's details.
     *
     * @param AdminStockLocation|null $location
     *
     * @return self
     */
    public function setLocation(?AdminStockLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * The fulfillment set's service zones.
     *
     * @return list<AdminServiceZone>|null
     */
    public function getServiceZones(): ?array
    {
        return $this->serviceZones;
    }
    /**
     * The fulfillment set's service zones.
     *
     * @param list<AdminServiceZone>|null $serviceZones
     *
     * @return self
     */
    public function setServiceZones(?array $serviceZones): self
    {
        $this->initialized['serviceZones'] = true;
        $this->serviceZones = $serviceZones;
        return $this;
    }
    /**
     * The fulfillment set's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The fulfillment set's created at.
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
     * The fulfillment set's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The fulfillment set's updated at.
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
     * The fulfillment set's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The fulfillment set's deleted at.
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