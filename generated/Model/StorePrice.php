<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StorePrice extends \ArrayObject
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
     * The price's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The price's ISO 2 currency code.
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
     * The minimum quantity required in the cart for the price to apply.
     *
     * @var float|null
     */
    protected $minQuantity;
    /**
     * The maximum quantity required in the cart for the price to apply.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * The price's rules.
     *
     * @var list<StorePriceRule>|null
     */
    protected $priceRules;
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
     * The price's ISO 2 currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The price's ISO 2 currency code.
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
     * The minimum quantity required in the cart for the price to apply.
     *
     * @return float|null
     */
    public function getMinQuantity(): ?float
    {
        return $this->minQuantity;
    }
    /**
     * The minimum quantity required in the cart for the price to apply.
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
     * The maximum quantity required in the cart for the price to apply.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The maximum quantity required in the cart for the price to apply.
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
     * @return list<StorePriceRule>|null
     */
    public function getPriceRules(): ?array
    {
        return $this->priceRules;
    }
    /**
     * The price's rules.
     *
     * @param list<StorePriceRule>|null $priceRules
     *
     * @return self
     */
    public function setPriceRules(?array $priceRules): self
    {
        $this->initialized['priceRules'] = true;
        $this->priceRules = $priceRules;
        return $this;
    }
}