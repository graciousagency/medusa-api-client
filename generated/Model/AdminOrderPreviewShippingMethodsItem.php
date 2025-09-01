<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderPreviewShippingMethodsItem extends \ArrayObject
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
     * The ID of the order this shipping method belongs to.
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
     * Whether the shipping method's amount is tax inclusive.
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
     * The data relevant for the fulfillment provider to process this shipment.
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
     * @var list<BaseOrderShippingMethodTaxLine>|null
     */
    protected $taxLines;
    /**
     * The shipping method's adjustments.
     *
     * @var list<BaseOrderShippingMethodAdjustment>|null
     */
    protected $adjustments;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $originalTotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $originalSubtotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $originalTaxTotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $total;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $subtotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $taxTotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $discountTotal;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $discountTaxTotal;
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
     * The actions applied on the shipping method.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $actions;
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
     * The ID of the order this shipping method belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this shipping method belongs to.
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
     * Whether the shipping method's amount is tax inclusive.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the shipping method's amount is tax inclusive.
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
     * The data relevant for the fulfillment provider to process this shipment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The data relevant for the fulfillment provider to process this shipment.
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
     * @return list<BaseOrderShippingMethodTaxLine>|null
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }
    /**
     * The shipping method's tax lines.
     *
     * @param list<BaseOrderShippingMethodTaxLine>|null $taxLines
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
     * @return list<BaseOrderShippingMethodAdjustment>|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }
    /**
     * The shipping method's adjustments.
     *
     * @param list<BaseOrderShippingMethodAdjustment>|null $adjustments
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
     * @return mixed
     */
    public function getOriginalTotal()
    {
        return $this->originalTotal;
    }
    /**
     * 
     *
     * @param mixed $originalTotal
     *
     * @return self
     */
    public function setOriginalTotal($originalTotal): self
    {
        $this->initialized['originalTotal'] = true;
        $this->originalTotal = $originalTotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getOriginalSubtotal()
    {
        return $this->originalSubtotal;
    }
    /**
     * 
     *
     * @param mixed $originalSubtotal
     *
     * @return self
     */
    public function setOriginalSubtotal($originalSubtotal): self
    {
        $this->initialized['originalSubtotal'] = true;
        $this->originalSubtotal = $originalSubtotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getOriginalTaxTotal()
    {
        return $this->originalTaxTotal;
    }
    /**
     * 
     *
     * @param mixed $originalTaxTotal
     *
     * @return self
     */
    public function setOriginalTaxTotal($originalTaxTotal): self
    {
        $this->initialized['originalTaxTotal'] = true;
        $this->originalTaxTotal = $originalTaxTotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param mixed $total
     *
     * @return self
     */
    public function setTotal($total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    /**
     * 
     *
     * @param mixed $subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal): self
    {
        $this->initialized['subtotal'] = true;
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }
    /**
     * 
     *
     * @param mixed $taxTotal
     *
     * @return self
     */
    public function setTaxTotal($taxTotal): self
    {
        $this->initialized['taxTotal'] = true;
        $this->taxTotal = $taxTotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDiscountTotal()
    {
        return $this->discountTotal;
    }
    /**
     * 
     *
     * @param mixed $discountTotal
     *
     * @return self
     */
    public function setDiscountTotal($discountTotal): self
    {
        $this->initialized['discountTotal'] = true;
        $this->discountTotal = $discountTotal;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDiscountTaxTotal()
    {
        return $this->discountTaxTotal;
    }
    /**
     * 
     *
     * @param mixed $discountTaxTotal
     *
     * @return self
     */
    public function setDiscountTaxTotal($discountTaxTotal): self
    {
        $this->initialized['discountTaxTotal'] = true;
        $this->discountTaxTotal = $discountTaxTotal;
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
     * The actions applied on the shipping method.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }
    /**
     * The actions applied on the shipping method.
     *
     * @param list<array<string, mixed>>|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
}