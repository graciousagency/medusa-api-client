<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRegion extends \ArrayObject
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
     * The tax region's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The tax region's country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The tax region's lower-case ISO 3166-2 province code.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * The tax region's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the parent tax region.
     *
     * @var string|null
     */
    protected $parentId;
    /**
     * The date the tax region was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the tax region was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the tax region was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The ID of the user that created the tax region.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The tax region's rates.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $taxRates;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $parent;
    /**
     * The tax region's children.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $children;
    /**
     * The tax region's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The tax region's ID.
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
     * The tax region's country code.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * The tax region's country code.
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
     * The tax region's lower-case ISO 3166-2 province code.
     *
     * @return string|null
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }
    /**
     * The tax region's lower-case ISO 3166-2 province code.
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
     * The tax region's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The tax region's metadata, can hold custom key-value pairs.
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
     * The ID of the parent tax region.
     *
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }
    /**
     * The ID of the parent tax region.
     *
     * @param string|null $parentId
     *
     * @return self
     */
    public function setParentId(?string $parentId): self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * The date the tax region was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the tax region was created.
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
     * The date the tax region was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the tax region was updated.
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
     * The date the tax region was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the tax region was deleted.
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
    /**
     * The ID of the user that created the tax region.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the tax region.
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
     * The tax region's rates.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getTaxRates(): ?array
    {
        return $this->taxRates;
    }
    /**
     * The tax region's rates.
     *
     * @param list<array<string, mixed>>|null $taxRates
     *
     * @return self
     */
    public function setTaxRates(?array $taxRates): self
    {
        $this->initialized['taxRates'] = true;
        $this->taxRates = $taxRates;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getParent(): ?iterable
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $parent
     *
     * @return self
     */
    public function setParent(?iterable $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
    /**
     * The tax region's children.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }
    /**
     * The tax region's children.
     *
     * @param list<array<string, mixed>>|null $children
     *
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
}