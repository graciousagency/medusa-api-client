<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminApplicationMethod extends \ArrayObject
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
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $promotion;
    /**
     * The application method's target rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $targetRules;
    /**
     * The application method's buy rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $buyRules;
    /**
     * The application method's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The application method's type. If it's `fixed`, the promotion discounts a fixed amount. If it's `percentage`, the promotion discounts a percentage.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Which item does the promotion apply to. `items` mean the promotion applies to the cart's items; `shipping_methods` means the promotion applies to the cart's shipping methods; `order` means the promotion applies on the entire order.
     *
     * @var string|null
     */
    protected $targetType;
    /**
     * How is the promotion amount discounted. `each` means the discounted amount is applied on each applicable item; `across` means the discounted amount is split accross the applicable items.
     *
     * @var string|null
     */
    protected $allocation;
    /**
     * The amount to be discounted.
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
     * The minimum quantity required for a `buyget` promotion to be applied. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `2`.
     *
     * @var float|null
     */
    protected $buyRulesMinQuantity;
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `1`.
     *
     * @var float|null
     */
    protected $applyToQuantity;
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getPromotion(): ?iterable
    {
        return $this->promotion;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $promotion
     *
     * @return self
     */
    public function setPromotion(?iterable $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * The application method's target rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getTargetRules(): ?array
    {
        return $this->targetRules;
    }
    /**
     * The application method's target rules.
     *
     * @param list<AdminPromotionRule>|null $targetRules
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
     * @return list<AdminPromotionRule>|null
     */
    public function getBuyRules(): ?array
    {
        return $this->buyRules;
    }
    /**
     * The application method's buy rules.
     *
     * @param list<AdminPromotionRule>|null $buyRules
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
     * The application method's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The application method's ID.
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
     * The application method's type. If it's `fixed`, the promotion discounts a fixed amount. If it's `percentage`, the promotion discounts a percentage.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The application method's type. If it's `fixed`, the promotion discounts a fixed amount. If it's `percentage`, the promotion discounts a percentage.
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
     * Which item does the promotion apply to. `items` mean the promotion applies to the cart's items; `shipping_methods` means the promotion applies to the cart's shipping methods; `order` means the promotion applies on the entire order.
     *
     * @return string|null
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }
    /**
     * Which item does the promotion apply to. `items` mean the promotion applies to the cart's items; `shipping_methods` means the promotion applies to the cart's shipping methods; `order` means the promotion applies on the entire order.
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
     * How is the promotion amount discounted. `each` means the discounted amount is applied on each applicable item; `across` means the discounted amount is split accross the applicable items.
     *
     * @return string|null
     */
    public function getAllocation(): ?string
    {
        return $this->allocation;
    }
    /**
     * How is the promotion amount discounted. `each` means the discounted amount is applied on each applicable item; `across` means the discounted amount is split accross the applicable items.
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
     * The amount to be discounted.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * The amount to be discounted.
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
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `1`.
     *
     * @return float|null
     */
    public function getApplyToQuantity(): ?float
    {
        return $this->applyToQuantity;
    }
    /**
     * The quantity that results from matching the `buyget` promotion's condition. For example, if the promotion is a "Buy 2 shirts get 1 free", the value of this attribute is `1`.
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
}