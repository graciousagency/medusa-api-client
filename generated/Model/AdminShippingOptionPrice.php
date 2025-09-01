<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionPrice extends \ArrayObject
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
     * The price's rules.
     *
     * @var list<AdminShippingOptionPriceRule>|null
     */
    protected $priceRules;
    /**
     * The number of rules the price has.
     *
     * @var float|null
     */
    protected $rulesCount;
    /**
     * The price's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The price's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The price's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The price's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The price's raw amount.
     *
     * @var array<string, mixed>|null
     */
    protected $rawAmount;
    /**
     * The minimum quantity required in the cart for this price to apply.
     *
     * @var float|null
     */
    protected $minQuantity;
    /**
     * The maximum quantity that the cart's items must not surpass for this price to apply.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * The ID of the price set this price belongs to.
     *
     * @var string|null
     */
    protected $priceSetId;
    /**
     * The date the price was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the price was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the price was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The price's rules.
     *
     * @return list<AdminShippingOptionPriceRule>|null
     */
    public function getPriceRules(): ?array
    {
        return $this->priceRules;
    }
    /**
     * The price's rules.
     *
     * @param list<AdminShippingOptionPriceRule>|null $priceRules
     *
     * @return self
     */
    public function setPriceRules(?array $priceRules): self
    {
        $this->initialized['priceRules'] = true;
        $this->priceRules = $priceRules;
        return $this;
    }
    /**
     * The number of rules the price has.
     *
     * @return float|null
     */
    public function getRulesCount(): ?float
    {
        return $this->rulesCount;
    }
    /**
     * The number of rules the price has.
     *
     * @param float|null $rulesCount
     *
     * @return self
     */
    public function setRulesCount(?float $rulesCount): self
    {
        $this->initialized['rulesCount'] = true;
        $this->rulesCount = $rulesCount;
        return $this;
    }
    /**
     * The price's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The price's ID.
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
     * The price's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The price's title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The price's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The price's currency code.
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
     * The price's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The price's amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The price's raw amount.
     *
     * @return array<string, mixed>|null
     */
    public function getRawAmount(): ?iterable
    {
        return $this->rawAmount;
    }
    /**
     * The price's raw amount.
     *
     * @param array<string, mixed>|null $rawAmount
     *
     * @return self
     */
    public function setRawAmount(?iterable $rawAmount): self
    {
        $this->initialized['rawAmount'] = true;
        $this->rawAmount = $rawAmount;
        return $this;
    }
    /**
     * The minimum quantity required in the cart for this price to apply.
     *
     * @return float|null
     */
    public function getMinQuantity(): ?float
    {
        return $this->minQuantity;
    }
    /**
     * The minimum quantity required in the cart for this price to apply.
     *
     * @param float|null $minQuantity
     *
     * @return self
     */
    public function setMinQuantity(?float $minQuantity): self
    {
        $this->initialized['minQuantity'] = true;
        $this->minQuantity = $minQuantity;
        return $this;
    }
    /**
     * The maximum quantity that the cart's items must not surpass for this price to apply.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The maximum quantity that the cart's items must not surpass for this price to apply.
     *
     * @param float|null $maxQuantity
     *
     * @return self
     */
    public function setMaxQuantity(?float $maxQuantity): self
    {
        $this->initialized['maxQuantity'] = true;
        $this->maxQuantity = $maxQuantity;
        return $this;
    }
    /**
     * The ID of the price set this price belongs to.
     *
     * @return string|null
     */
    public function getPriceSetId(): ?string
    {
        return $this->priceSetId;
    }
    /**
     * The ID of the price set this price belongs to.
     *
     * @param string|null $priceSetId
     *
     * @return self
     */
    public function setPriceSetId(?string $priceSetId): self
    {
        $this->initialized['priceSetId'] = true;
        $this->priceSetId = $priceSetId;
        return $this;
    }
    /**
     * The date the price was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the price was created.
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
     * The date the price was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the price was updated.
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
     * The date the price was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the price was deleted.
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