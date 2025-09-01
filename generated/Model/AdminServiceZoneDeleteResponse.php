<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminServiceZoneDeleteResponse extends \ArrayObject
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
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object = 'service_zone';
    /**
     * Whether the service zone was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The service zone's fulfillment set.
     *
     * @var AdminFulfillmentSet|null
     */
    protected $parent;
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
     * The name of the deleted object.
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->object;
    }
    /**
     * The name of the deleted object.
     *
     * @param string|null $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * Whether the service zone was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the service zone was deleted.
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The service zone's fulfillment set.
     *
     * @return AdminFulfillmentSet|null
     */
    public function getParent(): ?AdminFulfillmentSet
    {
        return $this->parent;
    }
    /**
     * The service zone's fulfillment set.
     *
     * @param AdminFulfillmentSet|null $parent
     *
     * @return self
     */
    public function setParent(?AdminFulfillmentSet $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}