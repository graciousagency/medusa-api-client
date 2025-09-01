<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateDraftOrderBillingAddress extends \ArrayObject
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
     * The billing address's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * The billing address's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * The billing address's phone.
     *
     * @var string|null
     */
    protected $phone;
    /**
     * The billing address's company.
     *
     * @var string|null
     */
    protected $company;
    /**
     * The first address line.
     *
     * @var string|null
     */
    protected $address1;
    /**
     * The second address line.
     *
     * @var string|null
     */
    protected $address2;
    /**
     * The billing address's city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The billing address's country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The billing address's ISO 3166-2 province code. Must be lower-case.
     *
     * @var string|null
     */
    protected $province;
    /**
     * The billing address's postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * The billing address's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The billing address's first name.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * The billing address's first name.
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
     * The billing address's last name.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * The billing address's last name.
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
     * The billing address's phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * The billing address's phone.
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
     * The billing address's company.
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * The billing address's company.
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
     * The first address line.
     *
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }
    /**
     * The first address line.
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
     * The second address line.
     *
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }
    /**
     * The second address line.
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
     * The billing address's city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * The billing address's city.
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
     * The billing address's country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * The billing address's country code.
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
     * The billing address's ISO 3166-2 province code. Must be lower-case.
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }
    /**
     * The billing address's ISO 3166-2 province code. Must be lower-case.
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
     * The billing address's postal code.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * The billing address's postal code.
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
     * The billing address's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The billing address's metadata, can hold custom key-value pairs.
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