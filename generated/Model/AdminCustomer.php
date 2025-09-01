<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomer extends \ArrayObject
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
     * The customer's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Whether the customer is registered.
     *
     * @var bool|null
     */
    protected $hasAccount;
    /**
     * The customer's groups.
     *
     * @var list<AdminCustomerGroup>|null
     */
    protected $groups;
    /**
     * The customer's email.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The ID of the address used as the default billing address.
     *
     * @var string|null
     */
    protected $defaultBillingAddressId;
    /**
     * The ID of the address used as the default shipping address.
     *
     * @var string|null
     */
    protected $defaultShippingAddressId;
    /**
     * The customer's company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * The customer's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The customer's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The customer's addresses.
     *
     * @var list<AdminCustomerAddress>|null
     */
    protected $addresses;
    /**
     * The customer's phone.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The customer's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the user that created this customer, if available.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The customer's creation date.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The customer's update date.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The customer's deletion date.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The customer's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The customer's ID.
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
     * Whether the customer is registered.
     *
     * @return bool|null
     */
    public function getHasAccount(): ?bool
    {
        return $this->hasAccount;
    }
    /**
     * Whether the customer is registered.
     *
     * @param bool|null $hasAccount
     *
     * @return self
     */
    public function setHasAccount(?bool $hasAccount): self
    {
        $this->initialized['hasAccount'] = true;
        $this->hasAccount = $hasAccount;
        return $this;
    }
    /**
     * The customer's groups.
     *
     * @return list<AdminCustomerGroup>|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }
    /**
     * The customer's groups.
     *
     * @param list<AdminCustomerGroup>|null $groups
     *
     * @return self
     */
    public function setGroups(?array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
    /**
     * The customer's email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The customer's email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The ID of the address used as the default billing address.
     *
     * @return string|null
     */
    public function getDefaultBillingAddressId(): ?string
    {
        return $this->defaultBillingAddressId;
    }
    /**
     * The ID of the address used as the default billing address.
     *
     * @param string|null $defaultBillingAddressId
     *
     * @return self
     */
    public function setDefaultBillingAddressId(?string $defaultBillingAddressId): self
    {
        $this->initialized['defaultBillingAddressId'] = true;
        $this->defaultBillingAddressId = $defaultBillingAddressId;
        return $this;
    }
    /**
     * The ID of the address used as the default shipping address.
     *
     * @return string|null
     */
    public function getDefaultShippingAddressId(): ?string
    {
        return $this->defaultShippingAddressId;
    }
    /**
     * The ID of the address used as the default shipping address.
     *
     * @param string|null $defaultShippingAddressId
     *
     * @return self
     */
    public function setDefaultShippingAddressId(?string $defaultShippingAddressId): self
    {
        $this->initialized['defaultShippingAddressId'] = true;
        $this->defaultShippingAddressId = $defaultShippingAddressId;
        return $this;
    }
    /**
     * The customer's company name.
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * The customer's company name.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * The customer's first name.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * The customer's first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The customer's last name.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * The customer's last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The customer's addresses.
     *
     * @return list<AdminCustomerAddress>|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }
    /**
     * The customer's addresses.
     *
     * @param list<AdminCustomerAddress>|null $addresses
     *
     * @return self
     */
    public function setAddresses(?array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * The customer's phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * The customer's phone.
     *
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * The customer's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The customer's metadata, used to store custom key-value pairs.
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
     * The ID of the user that created this customer, if available.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created this customer, if available.
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * The customer's creation date.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The customer's creation date.
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
     * The customer's update date.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The customer's update date.
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
     * The customer's deletion date.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The customer's deletion date.
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