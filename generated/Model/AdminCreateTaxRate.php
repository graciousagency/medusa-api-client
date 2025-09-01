<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateTaxRate extends \ArrayObject
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
     * The tax rate's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The ID of the tax region this rate belongs to.
     *
     * @var string|null
     */
    protected $taxRegionId;
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
     * The tax rate's rules.
     *
     * @var list<AdminCreateTaxRateRule>|null
     */
    protected $rules;
    /**
     * Whether the tax rate is the default in its tax region.
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * Whether the tax rate should be combined with parent rates.
     *
     * @var bool|null
     */
    protected $isCombinable;
    /**
     * The tax rate's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The tax rate's rules.
     *
     * @return list<AdminCreateTaxRateRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The tax rate's rules.
     *
     * @param list<AdminCreateTaxRateRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * Whether the tax rate is the default in its tax region.
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Whether the tax rate is the default in its tax region.
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
     * The tax rate's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The tax rate's metadata, used to store custom key-value pairs.
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