<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderShippingMethod extends \ArrayObject
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
     * The shipping method's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the order that the shipping method belongs to.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The shipping method's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The shipping method's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The shipping method's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Whether the shipping method's amount includes taxes.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The ID of the shipping option this method was created from.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The shipping method's data, useful for the fulfillment provider handling the fulfillment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The shipping method's tax lines.
     *
     * @var list<OrderShippingMethodTaxLine>|null
     */
    protected $taxLines;
    /**
     * The shipping method's adjustments.
     *
     * @var list<OrderShippingMethodAdjustment>|null
     */
    protected $adjustments;
    /**
     * The date the shipping method was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the shipping method was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The shipping method's total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The shipping method's subtotal excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The total taxes of the shipping method excluding promotions.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The shipping method's total including taxes and promotions.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The shipping method's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The total taxes of the shipping method, including promotions.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The shipping method's discount total.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The total taxes of the discount amount.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The shipping method's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The shipping method's ID.
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
     * The ID of the order that the shipping method belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order that the shipping method belongs to.
     *
     * @param string|null $orderId
     *
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The shipping method's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The shipping method's name.
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
     * The shipping method's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The shipping method's description.
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
     * The shipping method's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The shipping method's amount.
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
     * Whether the shipping method's amount includes taxes.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the shipping method's amount includes taxes.
     *
     * @param bool|null $isTaxInclusive
     *
     * @return self
     */
    public function setIsTaxInclusive(?bool $isTaxInclusive): self
    {
        $this->initialized['isTaxInclusive'] = true;
        $this->isTaxInclusive = $isTaxInclusive;
        return $this;
    }
    /**
     * The ID of the shipping option this method was created from.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the shipping option this method was created from.
     *
     * @param string|null $shippingOptionId
     *
     * @return self
     */
    public function setShippingOptionId(?string $shippingOptionId): self
    {
        $this->initialized['shippingOptionId'] = true;
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }
    /**
     * The shipping method's data, useful for the fulfillment provider handling the fulfillment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping method's data, useful for the fulfillment provider handling the fulfillment.
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
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
     * The shipping method's tax lines.
     *
     * @return list<OrderShippingMethodTaxLine>|null
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }
    /**
     * The shipping method's tax lines.
     *
     * @param list<OrderShippingMethodTaxLine>|null $taxLines
     *
     * @return self
     */
    public function setTaxLines(?array $taxLines): self
    {
        $this->initialized['taxLines'] = true;
        $this->taxLines = $taxLines;
        return $this;
    }
    /**
     * The shipping method's adjustments.
     *
     * @return list<OrderShippingMethodAdjustment>|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }
    /**
     * The shipping method's adjustments.
     *
     * @param list<OrderShippingMethodAdjustment>|null $adjustments
     *
     * @return self
     */
    public function setAdjustments(?array $adjustments): self
    {
        $this->initialized['adjustments'] = true;
        $this->adjustments = $adjustments;
        return $this;
    }
    /**
     * The date the shipping method was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the shipping method was created.
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
     * The date the shipping method was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the shipping method was updated.
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
     * The shipping method's total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The shipping method's total including taxes, excluding promotions.
     *
     * @param float|null $originalTotal
     *
     * @return self
     */
    public function setOriginalTotal(?float $originalTotal): self
    {
        $this->initialized['originalTotal'] = true;
        $this->originalTotal = $originalTotal;
        return $this;
    }
    /**
     * The shipping method's subtotal excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The shipping method's subtotal excluding taxes, including promotions.
     *
     * @param float|null $originalSubtotal
     *
     * @return self
     */
    public function setOriginalSubtotal(?float $originalSubtotal): self
    {
        $this->initialized['originalSubtotal'] = true;
        $this->originalSubtotal = $originalSubtotal;
        return $this;
    }
    /**
     * The total taxes of the shipping method excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The total taxes of the shipping method excluding promotions.
     *
     * @param float|null $originalTaxTotal
     *
     * @return self
     */
    public function setOriginalTaxTotal(?float $originalTaxTotal): self
    {
        $this->initialized['originalTaxTotal'] = true;
        $this->originalTaxTotal = $originalTaxTotal;
        return $this;
    }
    /**
     * The shipping method's total including taxes and promotions.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The shipping method's total including taxes and promotions.
     *
     * @param float|null $total
     *
     * @return self
     */
    public function setTotal(?float $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * The shipping method's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The shipping method's total excluding taxes, including promotions.
     *
     * @param float|null $subtotal
     *
     * @return self
     */
    public function setSubtotal(?float $subtotal): self
    {
        $this->initialized['subtotal'] = true;
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * The total taxes of the shipping method, including promotions.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The total taxes of the shipping method, including promotions.
     *
     * @param float|null $taxTotal
     *
     * @return self
     */
    public function setTaxTotal(?float $taxTotal): self
    {
        $this->initialized['taxTotal'] = true;
        $this->taxTotal = $taxTotal;
        return $this;
    }
    /**
     * The shipping method's discount total.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The shipping method's discount total.
     *
     * @param float|null $discountTotal
     *
     * @return self
     */
    public function setDiscountTotal(?float $discountTotal): self
    {
        $this->initialized['discountTotal'] = true;
        $this->discountTotal = $discountTotal;
        return $this;
    }
    /**
     * The total taxes of the discount amount.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The total taxes of the discount amount.
     *
     * @param float|null $discountTaxTotal
     *
     * @return self
     */
    public function setDiscountTaxTotal(?float $discountTaxTotal): self
    {
        $this->initialized['discountTaxTotal'] = true;
        $this->discountTaxTotal = $discountTaxTotal;
        return $this;
    }
}