<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminStoreCurrency extends \ArrayObject
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
     * The currency's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The currency's code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The ID of the store this currency belongs to.
     *
     * @var string|null
     */
    protected $storeId;
    /**
     * Whether this currency is the default in the store.
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * The currency's currencies.
     *
     * @var AdminCurrency|null
     */
    protected $currency;
    /**
     * The date the currency was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the currency was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the currency was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The currency's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The currency's ID.
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
     * The currency's code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The currency's code.
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
     * The ID of the store this currency belongs to.
     *
     * @return string|null
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }
    /**
     * The ID of the store this currency belongs to.
     *
     * @param string|null $storeId
     *
     * @return self
     */
    public function setStoreId(?string $storeId): self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Whether this currency is the default in the store.
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Whether this currency is the default in the store.
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
     * The currency's currencies.
     *
     * @return AdminCurrency|null
     */
    public function getCurrency(): ?AdminCurrency
    {
        return $this->currency;
    }
    /**
     * The currency's currencies.
     *
     * @param AdminCurrency|null $currency
     *
     * @return self
     */
    public function setCurrency(?AdminCurrency $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * The date the currency was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the currency was created.
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
     * The date the currency was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the currency was updated.
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
     * The date the currency was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the currency was deleted.
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