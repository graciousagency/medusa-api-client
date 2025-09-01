<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateTaxRegion extends \ArrayObject
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
     * The tax region's country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * The tax region's ISO 3166-2 province code. Must be lower-case.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * The ID of the parent tax region.
     *
     * @var string|null
     */
    protected $parentId;
    /**
     * The tax region's default tax rate.
     *
     * @var AdminCreateTaxRegionDefaultTaxRate|null
     */
    protected $defaultTaxRate;
    /**
     * The tax region's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the tax provider used to calculate the tax rate in this tax region.
     *
     * @var string|null
     */
    protected $providerId;
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
     * The tax region's ISO 3166-2 province code. Must be lower-case.
     *
     * @return string|null
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }
    /**
     * The tax region's ISO 3166-2 province code. Must be lower-case.
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
     * The tax region's default tax rate.
     *
     * @return AdminCreateTaxRegionDefaultTaxRate|null
     */
    public function getDefaultTaxRate(): ?AdminCreateTaxRegionDefaultTaxRate
    {
        return $this->defaultTaxRate;
    }
    /**
     * The tax region's default tax rate.
     *
     * @param AdminCreateTaxRegionDefaultTaxRate|null $defaultTaxRate
     *
     * @return self
     */
    public function setDefaultTaxRate(?AdminCreateTaxRegionDefaultTaxRate $defaultTaxRate): self
    {
        $this->initialized['defaultTaxRate'] = true;
        $this->defaultTaxRate = $defaultTaxRate;
        return $this;
    }
    /**
     * The tax region's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The tax region's metadata, used to store custom key-value pairs.
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
     * The ID of the tax provider used to calculate the tax rate in this tax region.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the tax provider used to calculate the tax rate in this tax region.
     *
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
}