<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseRegion extends \ArrayObject
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
     * The region's ID.
     *
     * @var string|null
     */
    protected $id;
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
     * The region's automatic taxes.
     *
     * @var bool|null
     */
    protected $automaticTaxes;
    /**
     * The region's countries.
     *
     * @var list<BaseRegionCountry>|null
     */
    protected $countries;
    /**
     * The region's payment providers.
     *
     * @var list<AdminPaymentProvider>|null
     */
    protected $paymentProviders;
    /**
     * The region's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The region's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The region's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The region's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The region's ID.
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
     * The region's automatic taxes.
     *
     * @return bool|null
     */
    public function getAutomaticTaxes(): ?bool
    {
        return $this->automaticTaxes;
    }
    /**
     * The region's automatic taxes.
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
     * The region's countries.
     *
     * @return list<BaseRegionCountry>|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }
    /**
     * The region's countries.
     *
     * @param list<BaseRegionCountry>|null $countries
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
     * The region's payment providers.
     *
     * @return list<AdminPaymentProvider>|null
     */
    public function getPaymentProviders(): ?array
    {
        return $this->paymentProviders;
    }
    /**
     * The region's payment providers.
     *
     * @param list<AdminPaymentProvider>|null $paymentProviders
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
     * The region's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The region's metadata.
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
     * The region's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The region's created at.
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
     * The region's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The region's updated at.
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