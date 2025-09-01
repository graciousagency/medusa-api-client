<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPriceListsIdPricesBatchPostBodyUpdateItem extends \ArrayObject
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
     * The ID of the variant this price is for.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * The minimum quantity that must be available of the associated variant in the cart for this price to apply.
     *
     * @var float|null
     */
    protected $minQuantity;
    /**
     * The maximum quantity that must be available of the associated variant in the cart for this price list to apply.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * Key-value pair rules to apply on the price.
     *
     * @var array<string, mixed>|null
     */
    protected $rules;
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
     * The ID of the variant this price is for.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The ID of the variant this price is for.
     *
     * @param string|null $variantId
     *
     * @return self
     */
    public function setVariantId(?string $variantId): self
    {
        $this->initialized['variantId'] = true;
        $this->variantId = $variantId;
        return $this;
    }
    /**
     * The minimum quantity that must be available of the associated variant in the cart for this price to apply.
     *
     * @return float|null
     */
    public function getMinQuantity(): ?float
    {
        return $this->minQuantity;
    }
    /**
     * The minimum quantity that must be available of the associated variant in the cart for this price to apply.
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
     * The maximum quantity that must be available of the associated variant in the cart for this price list to apply.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The maximum quantity that must be available of the associated variant in the cart for this price list to apply.
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
     * Key-value pair rules to apply on the price.
     *
     * @return array<string, mixed>|null
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }
    /**
     * Key-value pair rules to apply on the price.
     *
     * @param array<string, mixed>|null $rules
     *
     * @return self
     */
    public function setRules(?iterable $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}