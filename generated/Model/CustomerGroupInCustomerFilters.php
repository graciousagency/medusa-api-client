<?php

namespace Gracious\MedusaApiClientBundle\Model;

class CustomerGroupInCustomerFilters extends \ArrayObject
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
     * 
     *
     * @var mixed|null
     */
    protected $id;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $name;
    /**
     * Filter by the group's creation date.
     *
     * @var CustomerGroupInCustomerFiltersCreatedAt|null
     */
    protected $createdAt;
    /**
     * Filter by the group's update date.
     *
     * @var CustomerGroupInCustomerFiltersUpdatedAt|null
     */
    protected $updatedAt;
    /**
     * Filter by the group's deletion date.
     *
     * @var CustomerGroupInCustomerFiltersDeletedAt|null
     */
    protected $deletedAt;
    /**
     * 
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Filter by the group's creation date.
     *
     * @return CustomerGroupInCustomerFiltersCreatedAt|null
     */
    public function getCreatedAt(): ?CustomerGroupInCustomerFiltersCreatedAt
    {
        return $this->createdAt;
    }
    /**
     * Filter by the group's creation date.
     *
     * @param CustomerGroupInCustomerFiltersCreatedAt|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?CustomerGroupInCustomerFiltersCreatedAt $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Filter by the group's update date.
     *
     * @return CustomerGroupInCustomerFiltersUpdatedAt|null
     */
    public function getUpdatedAt(): ?CustomerGroupInCustomerFiltersUpdatedAt
    {
        return $this->updatedAt;
    }
    /**
     * Filter by the group's update date.
     *
     * @param CustomerGroupInCustomerFiltersUpdatedAt|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?CustomerGroupInCustomerFiltersUpdatedAt $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Filter by the group's deletion date.
     *
     * @return CustomerGroupInCustomerFiltersDeletedAt|null
     */
    public function getDeletedAt(): ?CustomerGroupInCustomerFiltersDeletedAt
    {
        return $this->deletedAt;
    }
    /**
     * Filter by the group's deletion date.
     *
     * @param CustomerGroupInCustomerFiltersDeletedAt|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?CustomerGroupInCustomerFiltersDeletedAt $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}