<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRegion extends \ArrayObject
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
     * Whether taxes are applied automatically during checkout.
     *
     * @var bool|null
     */
    protected $automaticTaxes;
    /**
     * The region's countries.
     *
     * @var list<AdminRegionCountry>|null
     */
    protected $countries;
    /**
     * The region's payment providers.
     *
     * @var list<AdminPaymentProvider>|null
     */
    protected $paymentProviders;
    /**
     * The region's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the region was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the region was updated.
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
     * Whether taxes are applied automatically during checkout.
     *
     * @return bool|null
     */
    public function getAutomaticTaxes(): ?bool
    {
        return $this->automaticTaxes;
    }
    /**
     * Whether taxes are applied automatically during checkout.
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
     * @return list<AdminRegionCountry>|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }
    /**
     * The region's countries.
     *
     * @param list<AdminRegionCountry>|null $countries
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
     * The region's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The region's metadata, can hold custom key-value pairs.
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
     * The date the region was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the region was created.
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
     * The date the region was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the region was updated.
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