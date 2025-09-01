<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomerInGroupFilters extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $defaultBillingAddressId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $defaultShippingAddressId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $companyName;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $createdBy;
    /**
     * Filter the customer's creation date.
     *
     * @var AdminCustomerInGroupFiltersCreatedAt|null
     */
    protected $createdAt;
    /**
     * Filter the customer's update date.
     *
     * @var AdminCustomerInGroupFiltersUpdatedAt|null
     */
    protected $updatedAt;
    /**
     * Filter the customer's deletion date.
     *
     * @var AdminCustomerInGroupFiltersDeletedAt|null
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
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDefaultBillingAddressId()
    {
        return $this->defaultBillingAddressId;
    }
    /**
     * 
     *
     * @param mixed $defaultBillingAddressId
     *
     * @return self
     */
    public function setDefaultBillingAddressId($defaultBillingAddressId): self
    {
        $this->initialized['defaultBillingAddressId'] = true;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDefaultShippingAddressId()
    {
        return $this->defaultShippingAddressId;
    }
    /**
     * 
     *
     * @param mixed $defaultShippingAddressId
     *
     * @return self
     */
    public function setDefaultShippingAddressId($defaultShippingAddressId): self
    {
        $this->initialized['defaultShippingAddressId'] = true;
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param mixed $companyName
     *
     * @return self
     */
    public function setCompanyName($companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param mixed $firstName
     *
     * @return self
     */
    public function setFirstName($firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param mixed $lastName
     *
     * @return self
     */
    public function setLastName($lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param mixed $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Filter the customer's creation date.
     *
     * @return AdminCustomerInGroupFiltersCreatedAt|null
     */
    public function getCreatedAt(): ?AdminCustomerInGroupFiltersCreatedAt
    {
        return $this->createdAt;
    }
    /**
     * Filter the customer's creation date.
     *
     * @param AdminCustomerInGroupFiltersCreatedAt|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?AdminCustomerInGroupFiltersCreatedAt $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Filter the customer's update date.
     *
     * @return AdminCustomerInGroupFiltersUpdatedAt|null
     */
    public function getUpdatedAt(): ?AdminCustomerInGroupFiltersUpdatedAt
    {
        return $this->updatedAt;
    }
    /**
     * Filter the customer's update date.
     *
     * @param AdminCustomerInGroupFiltersUpdatedAt|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?AdminCustomerInGroupFiltersUpdatedAt $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Filter the customer's deletion date.
     *
     * @return AdminCustomerInGroupFiltersDeletedAt|null
     */
    public function getDeletedAt(): ?AdminCustomerInGroupFiltersDeletedAt
    {
        return $this->deletedAt;
    }
    /**
     * Filter the customer's deletion date.
     *
     * @param AdminCustomerInGroupFiltersDeletedAt|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?AdminCustomerInGroupFiltersDeletedAt $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}