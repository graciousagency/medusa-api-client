<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseCalculatedPriceSet extends \ArrayObject
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
     * The calculated price's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Whether the calculated price belongs to a price list.
     *
     * @var bool|null
     */
    protected $isCalculatedPricePriceList;
    /**
     * Whether the calculated price is tax inclusive.
     *
     * @var bool|null
     */
    protected $isCalculatedPriceTaxInclusive;
    /**
     * The amount of the calculated price, or `null` if there isn't a calculated price. This is the amount shown to the customer.
     *
     * @var float|null
     */
    protected $calculatedAmount;
    /**
     * The calculated price's amount with taxes applied.
     *
     * @var float|null
     */
    protected $calculatedAmountWithTax;
    /**
     * The calculated price's amount without taxes applied.
     *
     * @var float|null
     */
    protected $calculatedAmountWithoutTax;
    /**
     * Whether the original price belongs to a price list.
     *
     * @var bool|null
     */
    protected $isOriginalPricePriceList;
    /**
     * Whether the original price is tax inclusive.
     *
     * @var bool|null
     */
    protected $isOriginalPriceTaxInclusive;
    /**
     * The amount of the original price, or `null` if there isn't an original price. This amount is useful to compare with the `calculated_amount`, such as to check for discounted value.
     *
     * @var float|null
     */
    protected $originalAmount;
    /**
     * The calculated price's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The calculated price's details.
     *
     * @var array<string, mixed>|null
     */
    protected $calculatedPrice;
    /**
     * The original price's details.
     *
     * @var array<string, mixed>|null
     */
    protected $originalPrice;
    /**
     * The amount of the original price with taxes applied.
     *
     * @var float|null
     */
    protected $originalAmountWithTax;
    /**
     * The amount of the original price without taxes.
     *
     * @var float|null
     */
    protected $originalAmountWithoutTax;
    /**
     * The calculated price's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The calculated price's ID.
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
     * Whether the calculated price belongs to a price list.
     *
     * @return bool|null
     */
    public function getIsCalculatedPricePriceList(): ?bool
    {
        return $this->isCalculatedPricePriceList;
    }
    /**
     * Whether the calculated price belongs to a price list.
     *
     * @param bool|null $isCalculatedPricePriceList
     *
     * @return self
     */
    public function setIsCalculatedPricePriceList(?bool $isCalculatedPricePriceList): self
    {
        $this->initialized['isCalculatedPricePriceList'] = true;
        $this->isCalculatedPricePriceList = $isCalculatedPricePriceList;
        return $this;
    }
    /**
     * Whether the calculated price is tax inclusive.
     *
     * @return bool|null
     */
    public function getIsCalculatedPriceTaxInclusive(): ?bool
    {
        return $this->isCalculatedPriceTaxInclusive;
    }
    /**
     * Whether the calculated price is tax inclusive.
     *
     * @param bool|null $isCalculatedPriceTaxInclusive
     *
     * @return self
     */
    public function setIsCalculatedPriceTaxInclusive(?bool $isCalculatedPriceTaxInclusive): self
    {
        $this->initialized['isCalculatedPriceTaxInclusive'] = true;
        $this->isCalculatedPriceTaxInclusive = $isCalculatedPriceTaxInclusive;
        return $this;
    }
    /**
     * The amount of the calculated price, or `null` if there isn't a calculated price. This is the amount shown to the customer.
     *
     * @return float|null
     */
    public function getCalculatedAmount(): ?float
    {
        return $this->calculatedAmount;
    }
    /**
     * The amount of the calculated price, or `null` if there isn't a calculated price. This is the amount shown to the customer.
     *
     * @param float|null $calculatedAmount
     *
     * @return self
     */
    public function setCalculatedAmount(?float $calculatedAmount): self
    {
        $this->initialized['calculatedAmount'] = true;
        $this->calculatedAmount = $calculatedAmount;
        return $this;
    }
    /**
     * The calculated price's amount with taxes applied.
     *
     * @return float|null
     */
    public function getCalculatedAmountWithTax(): ?float
    {
        return $this->calculatedAmountWithTax;
    }
    /**
     * The calculated price's amount with taxes applied.
     *
     * @param float|null $calculatedAmountWithTax
     *
     * @return self
     */
    public function setCalculatedAmountWithTax(?float $calculatedAmountWithTax): self
    {
        $this->initialized['calculatedAmountWithTax'] = true;
        $this->calculatedAmountWithTax = $calculatedAmountWithTax;
        return $this;
    }
    /**
     * The calculated price's amount without taxes applied.
     *
     * @return float|null
     */
    public function getCalculatedAmountWithoutTax(): ?float
    {
        return $this->calculatedAmountWithoutTax;
    }
    /**
     * The calculated price's amount without taxes applied.
     *
     * @param float|null $calculatedAmountWithoutTax
     *
     * @return self
     */
    public function setCalculatedAmountWithoutTax(?float $calculatedAmountWithoutTax): self
    {
        $this->initialized['calculatedAmountWithoutTax'] = true;
        $this->calculatedAmountWithoutTax = $calculatedAmountWithoutTax;
        return $this;
    }
    /**
     * Whether the original price belongs to a price list.
     *
     * @return bool|null
     */
    public function getIsOriginalPricePriceList(): ?bool
    {
        return $this->isOriginalPricePriceList;
    }
    /**
     * Whether the original price belongs to a price list.
     *
     * @param bool|null $isOriginalPricePriceList
     *
     * @return self
     */
    public function setIsOriginalPricePriceList(?bool $isOriginalPricePriceList): self
    {
        $this->initialized['isOriginalPricePriceList'] = true;
        $this->isOriginalPricePriceList = $isOriginalPricePriceList;
        return $this;
    }
    /**
     * Whether the original price is tax inclusive.
     *
     * @return bool|null
     */
    public function getIsOriginalPriceTaxInclusive(): ?bool
    {
        return $this->isOriginalPriceTaxInclusive;
    }
    /**
     * Whether the original price is tax inclusive.
     *
     * @param bool|null $isOriginalPriceTaxInclusive
     *
     * @return self
     */
    public function setIsOriginalPriceTaxInclusive(?bool $isOriginalPriceTaxInclusive): self
    {
        $this->initialized['isOriginalPriceTaxInclusive'] = true;
        $this->isOriginalPriceTaxInclusive = $isOriginalPriceTaxInclusive;
        return $this;
    }
    /**
     * The amount of the original price, or `null` if there isn't an original price. This amount is useful to compare with the `calculated_amount`, such as to check for discounted value.
     *
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * The amount of the original price, or `null` if there isn't an original price. This amount is useful to compare with the `calculated_amount`, such as to check for discounted value.
     *
     * @param float|null $originalAmount
     *
     * @return self
     */
    public function setOriginalAmount(?float $originalAmount): self
    {
        $this->initialized['originalAmount'] = true;
        $this->originalAmount = $originalAmount;
        return $this;
    }
    /**
     * The calculated price's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The calculated price's currency code.
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
     * The calculated price's details.
     *
     * @return array<string, mixed>|null
     */
    public function getCalculatedPrice(): ?iterable
    {
        return $this->calculatedPrice;
    }
    /**
     * The calculated price's details.
     *
     * @param array<string, mixed>|null $calculatedPrice
     *
     * @return self
     */
    public function setCalculatedPrice(?iterable $calculatedPrice): self
    {
        $this->initialized['calculatedPrice'] = true;
        $this->calculatedPrice = $calculatedPrice;
        return $this;
    }
    /**
     * The original price's details.
     *
     * @return array<string, mixed>|null
     */
    public function getOriginalPrice(): ?iterable
    {
        return $this->originalPrice;
    }
    /**
     * The original price's details.
     *
     * @param array<string, mixed>|null $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(?iterable $originalPrice): self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * The amount of the original price with taxes applied.
     *
     * @return float|null
     */
    public function getOriginalAmountWithTax(): ?float
    {
        return $this->originalAmountWithTax;
    }
    /**
     * The amount of the original price with taxes applied.
     *
     * @param float|null $originalAmountWithTax
     *
     * @return self
     */
    public function setOriginalAmountWithTax(?float $originalAmountWithTax): self
    {
        $this->initialized['originalAmountWithTax'] = true;
        $this->originalAmountWithTax = $originalAmountWithTax;
        return $this;
    }
    /**
     * The amount of the original price without taxes.
     *
     * @return float|null
     */
    public function getOriginalAmountWithoutTax(): ?float
    {
        return $this->originalAmountWithoutTax;
    }
    /**
     * The amount of the original price without taxes.
     *
     * @param float|null $originalAmountWithoutTax
     *
     * @return self
     */
    public function setOriginalAmountWithoutTax(?float $originalAmountWithoutTax): self
    {
        $this->initialized['originalAmountWithoutTax'] = true;
        $this->originalAmountWithoutTax = $originalAmountWithoutTax;
        return $this;
    }
}