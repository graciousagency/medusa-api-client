<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreUpdateCustomerAddress extends \ArrayObject
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
     * The customer's phone.
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
     * The address's ISO 3166-2 province code. Must be lower-case.
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
     * The address's name.
     *
     * @var string|null
     */
    protected $addressName;
    /**
     * Whether the address is used by default for shipping during checkout.
     *
     * @var bool|null
     */
    protected $isDefaultShipping;
    /**
     * Whether the address is used by default for billing during checkout.
     *
     * @var bool|null
     */
    protected $isDefaultBilling;
    /**
     * Holds custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The address's ISO 3166-2 province code. Must be lower-case.
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }
    /**
     * The address's ISO 3166-2 province code. Must be lower-case.
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
     * The address's name.
     *
     * @return string|null
     */
    public function getAddressName(): ?string
    {
        return $this->addressName;
    }
    /**
     * The address's name.
     *
     * @param string|null $addressName
     *
     * @return self
     */
    public function setAddressName(?string $addressName): self
    {
        $this->initialized['addressName'] = true;
        $this->addressName = $addressName;
        return $this;
    }
    /**
     * Whether the address is used by default for shipping during checkout.
     *
     * @return bool|null
     */
    public function getIsDefaultShipping(): ?bool
    {
        return $this->isDefaultShipping;
    }
    /**
     * Whether the address is used by default for shipping during checkout.
     *
     * @param bool|null $isDefaultShipping
     *
     * @return self
     */
    public function setIsDefaultShipping(?bool $isDefaultShipping): self
    {
        $this->initialized['isDefaultShipping'] = true;
        $this->isDefaultShipping = $isDefaultShipping;
        return $this;
    }
    /**
     * Whether the address is used by default for billing during checkout.
     *
     * @return bool|null
     */
    public function getIsDefaultBilling(): ?bool
    {
        return $this->isDefaultBilling;
    }
    /**
     * Whether the address is used by default for billing during checkout.
     *
     * @param bool|null $isDefaultBilling
     *
     * @return self
     */
    public function setIsDefaultBilling(?bool $isDefaultBilling): self
    {
        $this->initialized['isDefaultBilling'] = true;
        $this->isDefaultBilling = $isDefaultBilling;
        return $this;
    }
    /**
     * Holds custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * Holds custom key-value pairs.
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