<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminGeoZone extends \ArrayObject
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
     * The geo zone's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The geo zone's type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The geo zone's country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The geo zone's lower-case ISO 3166-2 province code.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * The geo zone's city.
     *
     * @var string|null
     */
    protected $city;
    /**
     * The geo zone's postal expression.
     *
     * @var array<string, mixed>|null
     */
    protected $postalExpression;
    /**
     * The geo zone's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The geo zone's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The geo zone's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The geo zone's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The geo zone's ID.
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
     * The geo zone's type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The geo zone's type.
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
     * The geo zone's country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * The geo zone's country code.
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
     * The geo zone's lower-case ISO 3166-2 province code.
     *
     * @return string|null
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }
    /**
     * The geo zone's lower-case ISO 3166-2 province code.
     *
     * @param string|null $provinceCode
     *
     * @return self
     */
    public function setProvinceCode(?string $provinceCode): self
    {
        $this->initialized['provinceCode'] = true;
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * The geo zone's city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * The geo zone's city.
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
     * The geo zone's postal expression.
     *
     * @return array<string, mixed>|null
     */
    public function getPostalExpression(): ?iterable
    {
        return $this->postalExpression;
    }
    /**
     * The geo zone's postal expression.
     *
     * @param array<string, mixed>|null $postalExpression
     *
     * @return self
     */
    public function setPostalExpression(?iterable $postalExpression): self
    {
        $this->initialized['postalExpression'] = true;
        $this->postalExpression = $postalExpression;
        return $this;
    }
    /**
     * The geo zone's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The geo zone's created at.
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
     * The geo zone's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The geo zone's updated at.
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
     * The geo zone's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The geo zone's deleted at.
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