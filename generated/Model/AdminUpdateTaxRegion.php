<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateTaxRegion extends \ArrayObject
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
     * The tax region's ISO 3166-2 province code. Must be lower-case.
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
     * The ID of the tax provider to use when calculating taxes for this tax region.
     *
     * @var string|null
     */
    protected $providerId;
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
     * The ID of the tax provider to use when calculating taxes for this tax region.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the tax provider to use when calculating taxes for this tax region.
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