<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsPostBodyapplicationMethod extends \ArrayObject
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
     * The application method's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The discounted amount applied by the associated promotion based on the `type`.
     *
     * @var float|null
     */
    protected $value;
    /**
     * The application method's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The max quantity allowed in the cart for the associated promotion to be applied.
     *
     * @var float|null
     */
    protected $maxQuantity;
    /**
     * The type of the application method indicating how the associated promotion is applied.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The target type of the application method indicating whether the associated promotion is applied to the cart's items, shipping methods, or the whole order.
     *
     * @var string|null
     */
    protected $targetType;
    /**
     * The allocation value that indicates whether the associated promotion is applied on each item in a cart or split between the items in the cart.
     *
     * @var string|null
     */
    protected $allocation;
    /**
     * The application method's target rules.
     *
     * @var list<AdminPromotionsPostBodyapplicationMethodTargetRulesItem>|null
     */
    protected $targetRules;
    /**
     * The application method's buy rules.
     *
     * @var list<AdminPromotionsPostBodyapplicationMethodBuyRulesItem>|null
     */
    protected $buyRules;
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value f this attribute is `1`.
     *
     * @var float|null
     */
    protected $applyToQuantity;
    /**
     * The minimum quantity required for a `buyget` promotion to be applied. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `2`.
     *
     * @var float|null
     */
    protected $buyRulesMinQuantity;
    /**
     * The application method's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The application method's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The discounted amount applied by the associated promotion based on the `type`.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * The discounted amount applied by the associated promotion based on the `type`.
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The application method's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The application method's currency code.
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
     * The max quantity allowed in the cart for the associated promotion to be applied.
     *
     * @return float|null
     */
    public function getMaxQuantity(): ?float
    {
        return $this->maxQuantity;
    }
    /**
     * The max quantity allowed in the cart for the associated promotion to be applied.
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
     * The type of the application method indicating how the associated promotion is applied.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The type of the application method indicating how the associated promotion is applied.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The target type of the application method indicating whether the associated promotion is applied to the cart's items, shipping methods, or the whole order.
     *
     * @return string|null
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }
    /**
     * The target type of the application method indicating whether the associated promotion is applied to the cart's items, shipping methods, or the whole order.
     *
     * @param string|null $targetType
     *
     * @return self
     */
    public function setTargetType(?string $targetType): self
    {
        $this->initialized['targetType'] = true;
        $this->targetType = $targetType;
        return $this;
    }
    /**
     * The allocation value that indicates whether the associated promotion is applied on each item in a cart or split between the items in the cart.
     *
     * @return string|null
     */
    public function getAllocation(): ?string
    {
        return $this->allocation;
    }
    /**
     * The allocation value that indicates whether the associated promotion is applied on each item in a cart or split between the items in the cart.
     *
     * @param string|null $allocation
     *
     * @return self
     */
    public function setAllocation(?string $allocation): self
    {
        $this->initialized['allocation'] = true;
        $this->allocation = $allocation;
        return $this;
    }
    /**
     * The application method's target rules.
     *
     * @return list<AdminPromotionsPostBodyapplicationMethodTargetRulesItem>|null
     */
    public function getTargetRules(): ?array
    {
        return $this->targetRules;
    }
    /**
     * The application method's target rules.
     *
     * @param list<AdminPromotionsPostBodyapplicationMethodTargetRulesItem>|null $targetRules
     *
     * @return self
     */
    public function setTargetRules(?array $targetRules): self
    {
        $this->initialized['targetRules'] = true;
        $this->targetRules = $targetRules;
        return $this;
    }
    /**
     * The application method's buy rules.
     *
     * @return list<AdminPromotionsPostBodyapplicationMethodBuyRulesItem>|null
     */
    public function getBuyRules(): ?array
    {
        return $this->buyRules;
    }
    /**
     * The application method's buy rules.
     *
     * @param list<AdminPromotionsPostBodyapplicationMethodBuyRulesItem>|null $buyRules
     *
     * @return self
     */
    public function setBuyRules(?array $buyRules): self
    {
        $this->initialized['buyRules'] = true;
        $this->buyRules = $buyRules;
        return $this;
    }
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value f this attribute is `1`.
     *
     * @return float|null
     */
    public function getApplyToQuantity(): ?float
    {
        return $this->applyToQuantity;
    }
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value f this attribute is `1`.
     *
     * @param float|null $applyToQuantity
     *
     * @return self
     */
    public function setApplyToQuantity(?float $applyToQuantity): self
    {
        $this->initialized['applyToQuantity'] = true;
        $this->applyToQuantity = $applyToQuantity;
        return $this;
    }
    /**
     * The minimum quantity required for a `buyget` promotion to be applied. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `2`.
     *
     * @return float|null
     */
    public function getBuyRulesMinQuantity(): ?float
    {
        return $this->buyRulesMinQuantity;
    }
    /**
     * The minimum quantity required for a `buyget` promotion to be applied. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `2`.
     *
     * @param float|null $buyRulesMinQuantity
     *
     * @return self
     */
    public function setBuyRulesMinQuantity(?float $buyRulesMinQuantity): self
    {
        $this->initialized['buyRulesMinQuantity'] = true;
        $this->buyRulesMinQuantity = $buyRulesMinQuantity;
        return $this;
    }
}