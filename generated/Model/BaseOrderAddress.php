<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderAddress extends \ArrayObject
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
     * The address's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the customer this address belongs to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The address's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The address's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The address's phone.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The address's company.
     *
     * @var string|null
     */
    protected $company;
    /**
     * The address's first line.
     *
     * @var string|null
     */
    protected $address1;
    /**
     * The address's second line.
     *
     * @var string|null
     */
    protected $address2;
    /**
     * The address's city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The address's country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The address's lower-case ISO 3166-2 province code.
     *
     * @var string|null
     */
    protected $province;
    /**
     * The address's postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The address's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the address was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the address was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The address's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The address's ID.
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
     * The ID of the customer this address belongs to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer this address belongs to.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The address's first name.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * The address's first name.
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
     * The address's last name.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * The address's last name.
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
     * The address's phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * The address's phone.
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
     * The address's company.
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * The address's company.
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * The address's first line.
     *
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }
    /**
     * The address's first line.
     *
     * @param string|null $address1
     *
     * @return self
     */
    public function setAddress1(?string $address1): self
    {
        $this->initialized['address1'] = true;
        $this->address1 = $address1;
        return $this;
    }
    /**
     * The address's second line.
     *
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }
    /**
     * The address's second line.
     *
     * @param string|null $address2
     *
     * @return self
     */
    public function setAddress2(?string $address2): self
    {
        $this->initialized['address2'] = true;
        $this->address2 = $address2;
        return $this;
    }
    /**
     * The address's city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * The address's city.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * The address's country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * The address's country code.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The address's lower-case ISO 3166-2 province code.
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }
    /**
     * The address's lower-case ISO 3166-2 province code.
     *
     * @param string|null $province
     *
     * @return self
     */
    public function setProvince(?string $province): self
    {
        $this->initialized['province'] = true;
        $this->province = $province;
        return $this;
    }
    /**
     * The address's postal code.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * The address's postal code.
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * The address's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The address's metadata, can hold custom key-value pairs.
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
     * The date the address was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the address was created.
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
     * The date the address was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the address was updated.
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
}