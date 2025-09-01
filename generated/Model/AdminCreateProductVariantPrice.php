<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateProductVariantPrice extends \ArrayObject
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
     * The minimum quantity that must be available in the cart for this price to apply.
     *
     * @var float|null
     */
    protected $minQuantity;
    /**
     * The maximum quantity that must not be surpassed in the cart for this price to apply.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * The price's rules.
     *
     * @var AdminCreateProductVariantPriceRules|null
     */
    protected $rules;
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
     * The minimum quantity that must be available in the cart for this price to apply.
     *
     * @return float|null
     */
    public function getMinQuantity(): ?float
    {
        return $this->minQuantity;
    }
    /**
     * The minimum quantity that must be available in the cart for this price to apply.
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
     * The maximum quantity that must not be surpassed in the cart for this price to apply.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The maximum quantity that must not be surpassed in the cart for this price to apply.
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
     * The price's rules.
     *
     * @return AdminCreateProductVariantPriceRules|null
     */
    public function getRules(): ?AdminCreateProductVariantPriceRules
    {
        return $this->rules;
    }
    /**
     * The price's rules.
     *
     * @param AdminCreateProductVariantPriceRules|null $rules
     *
     * @return self
     */
    public function setRules(?AdminCreateProductVariantPriceRules $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}