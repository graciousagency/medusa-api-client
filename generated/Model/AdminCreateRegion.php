<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateRegion extends \ArrayObject
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
     * The region's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The region's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The region's countries.
     *
     * @var list<string>|null
     */
    protected $countries;
    /**
     * Whether taxes are calculated automatically during checkout in this region.
     *
     * @var bool|null
     */
    protected $automaticTaxes;
    /**
     * Whether prices in this region are tax inclusive.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The payment providers enabled in this region.
     *
     * @var list<string>|null
     */
    protected $paymentProviders;
    /**
     * The region's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The region's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The region's name.
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
     * The region's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The region's currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The region's countries.
     *
     * @return list<string>|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }
    /**
     * The region's countries.
     *
     * @param list<string>|null $countries
     *
     * @return self
     */
    public function setCountries(?array $countries): self
    {
        $this->initialized['countries'] = true;
        $this->countries = $countries;
        return $this;
    }
    /**
     * Whether taxes are calculated automatically during checkout in this region.
     *
     * @return bool|null
     */
    public function getAutomaticTaxes(): ?bool
    {
        return $this->automaticTaxes;
    }
    /**
     * Whether taxes are calculated automatically during checkout in this region.
     *
     * @param bool|null $automaticTaxes
     *
     * @return self
     */
    public function setAutomaticTaxes(?bool $automaticTaxes): self
    {
        $this->initialized['automaticTaxes'] = true;
        $this->automaticTaxes = $automaticTaxes;
        return $this;
    }
    /**
     * Whether prices in this region are tax inclusive.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether prices in this region are tax inclusive.
     *
     * @param bool|null $isTaxInclusive
     *
     * @return self
     */
    public function setIsTaxInclusive(?bool $isTaxInclusive): self
    {
        $this->initialized['isTaxInclusive'] = true;
        $this->isTaxInclusive = $isTaxInclusive;
        return $this;
    }
    /**
     * The payment providers enabled in this region.
     *
     * @return list<string>|null
     */
    public function getPaymentProviders(): ?array
    {
        return $this->paymentProviders;
    }
    /**
     * The payment providers enabled in this region.
     *
     * @param list<string>|null $paymentProviders
     *
     * @return self
     */
    public function setPaymentProviders(?array $paymentProviders): self
    {
        $this->initialized['paymentProviders'] = true;
        $this->paymentProviders = $paymentProviders;
        return $this;
    }
    /**
     * The region's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The region's metadata, used to store custom key-value pairs.
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