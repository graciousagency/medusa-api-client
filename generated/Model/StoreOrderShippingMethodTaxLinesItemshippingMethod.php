<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderShippingMethodTaxLinesItemshippingMethod extends \ArrayObject
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
     * The shipping method's tax lines.
     *
     * @var list<StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem>|null
     */
    protected $taxLines;
    /**
     * The shipping method's adjustments.
     *
     * @var list<StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem>|null
     */
    protected $adjustments;
    /**
     * 
     *
     * @var StoreOrderShippingMethodTaxLinesItemshippingMethodDetail|null
     */
    protected $detail;
    /**
     * The shipping method's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The shipping method's order id.
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
     * The shipping method's is tax inclusive.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The shipping method's shipping option id.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The shipping method's data.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The shipping method's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The shipping method's original total.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The shipping method's original subtotal.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The shipping method's original tax total.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The shipping method's total.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The shipping method's subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The shipping method's tax total.
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
     * The shipping method's discount tax total.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The shipping method's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The shipping method's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The shipping method's tax lines.
     *
     * @return list<StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem>|null
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }
    /**
     * The shipping method's tax lines.
     *
     * @param list<StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem>|null $taxLines
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
     * @return list<StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem>|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }
    /**
     * The shipping method's adjustments.
     *
     * @param list<StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem>|null $adjustments
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
     * 
     *
     * @return StoreOrderShippingMethodTaxLinesItemshippingMethodDetail|null
     */
    public function getDetail(): ?StoreOrderShippingMethodTaxLinesItemshippingMethodDetail
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param StoreOrderShippingMethodTaxLinesItemshippingMethodDetail|null $detail
     *
     * @return self
     */
    public function setDetail(?StoreOrderShippingMethodTaxLinesItemshippingMethodDetail $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
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
     * The shipping method's order id.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The shipping method's order id.
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
     * The shipping method's is tax inclusive.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * The shipping method's is tax inclusive.
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
     * The shipping method's shipping option id.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The shipping method's shipping option id.
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
     * The shipping method's data.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The shipping method's data.
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
     * The shipping method's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipping method's metadata.
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
     * The shipping method's original total.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The shipping method's original total.
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
     * The shipping method's original subtotal.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The shipping method's original subtotal.
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
     * The shipping method's original tax total.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The shipping method's original tax total.
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
     * The shipping method's total.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The shipping method's total.
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
     * The shipping method's subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The shipping method's subtotal.
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
     * The shipping method's tax total.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The shipping method's tax total.
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
     * The shipping method's discount tax total.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The shipping method's discount tax total.
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
    /**
     * The shipping method's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The shipping method's created at.
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
     * The shipping method's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The shipping method's updated at.
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