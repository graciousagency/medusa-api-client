<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRate extends \ArrayObject
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
     * The tax rate's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The rate to charge.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * The code the tax rate is identified by.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The tax rate's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The tax rate's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the tax region this rate belongs to.
     *
     * @var string|null
     */
    protected $taxRegionId;
    /**
     * Whether the tax rate should be combined with parent rates.
     *
     * @var bool|null
     */
    protected $isCombinable;
    /**
     * Whether this tax rate is the default in the tax region.
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * The date the tax rate was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the tax rate was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the tax rate was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The ID of the user that created the tax rate.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * The tax region's details.
     *
     * @var AdminTaxRegion|null
     */
    protected $taxRegion;
    /**
     * The tax rate's rules.
     *
     * @var list<AdminTaxRateRule>|null
     */
    protected $rules;
    /**
     * The tax rate's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The tax rate's ID.
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
     * The rate to charge.
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }
    /**
     * The rate to charge.
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * The code the tax rate is identified by.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The code the tax rate is identified by.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The tax rate's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The tax rate's name.
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
     * The tax rate's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The tax rate's metadata, can hold custom key-value pairs.
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
     * The ID of the tax region this rate belongs to.
     *
     * @return string|null
     */
    public function getTaxRegionId(): ?string
    {
        return $this->taxRegionId;
    }
    /**
     * The ID of the tax region this rate belongs to.
     *
     * @param string|null $taxRegionId
     *
     * @return self
     */
    public function setTaxRegionId(?string $taxRegionId): self
    {
        $this->initialized['taxRegionId'] = true;
        $this->taxRegionId = $taxRegionId;
        return $this;
    }
    /**
     * Whether the tax rate should be combined with parent rates.
     *
     * @return bool|null
     */
    public function getIsCombinable(): ?bool
    {
        return $this->isCombinable;
    }
    /**
     * Whether the tax rate should be combined with parent rates.
     *
     * @param bool|null $isCombinable
     *
     * @return self
     */
    public function setIsCombinable(?bool $isCombinable): self
    {
        $this->initialized['isCombinable'] = true;
        $this->isCombinable = $isCombinable;
        return $this;
    }
    /**
     * Whether this tax rate is the default in the tax region.
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Whether this tax rate is the default in the tax region.
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * The date the tax rate was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the tax rate was created.
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
     * The date the tax rate was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the tax rate was updated.
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
     * The date the tax rate was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the tax rate was deleted.
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
     * The ID of the user that created the tax rate.
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }
    /**
     * The ID of the user that created the tax rate.
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
     * The tax region's details.
     *
     * @return AdminTaxRegion|null
     */
    public function getTaxRegion(): ?AdminTaxRegion
    {
        return $this->taxRegion;
    }
    /**
     * The tax region's details.
     *
     * @param AdminTaxRegion|null $taxRegion
     *
     * @return self
     */
    public function setTaxRegion(?AdminTaxRegion $taxRegion): self
    {
        $this->initialized['taxRegion'] = true;
        $this->taxRegion = $taxRegion;
        return $this;
    }
    /**
     * The tax rate's rules.
     *
     * @return list<AdminTaxRateRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The tax rate's rules.
     *
     * @param list<AdminTaxRateRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}