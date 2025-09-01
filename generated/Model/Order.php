<?php

namespace Gracious\MedusaApiClientBundle\Model;

class Order extends \ArrayObject
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
     * The order's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The order's version.
     *
     * @var float|null
     */
    protected $version;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $orderChange;
    /**
     * The order's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The ID of the region the order belongs to.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The ID of the customer that placed the order.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The ID of the sales channel the order was placed in.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The email of the customer that placed the order.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The order's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The address's details.
     *
     * @var OrderAddress|null
     */
    protected $shippingAddress;
    /**
     * The address's details.
     *
     * @var OrderAddress|null
     */
    protected $billingAddress;
    /**
     * The order's items.
     *
     * @var list<OrderLineItem>|null
     */
    protected $items;
    /**
     * The order's shipping methods.
     *
     * @var list<OrderShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The order's transactions.
     *
     * @var list<OrderTransaction>|null
     */
    protected $transactions;
    /**
     * The order's summary.
     *
     * @var OrderSummary|null
     */
    protected $summary;
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the order was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The date the order was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the order was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The order items' total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTotal;
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalItemSubtotal;
    /**
     * The taxes total for order items, excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTaxTotal;
    /**
     * The order items' total including taxes and promotions.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The tax total of the order items including promotions.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The order's total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The order's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The tax total of the order excluding promotions.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The order's total including taxes and promotions.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The order's subtotal excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The tax total of the order including promotions.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The total discount excluding taxes.
     *
     * @var float|null
     */
    protected $discountSubtotal;
    /**
     * The total discount including taxes.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The tax total applied on the discount.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The order's gift card total.
     *
     * @var float|null
     */
    protected $giftCardTotal;
    /**
     * The order's gift card tax total.
     *
     * @var float|null
     */
    protected $giftCardTaxTotal;
    /**
     * The order's shipping total including taxes and promotions.
     *
     * @var float|null
     */
    protected $shippingTotal;
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $shippingSubtotal;
    /**
     * The total taxes of the order's shipping including taxes.
     *
     * @var float|null
     */
    protected $shippingTaxTotal;
    /**
     * The order's shipping total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalShippingTotal;
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalShippingSubtotal;
    /**
     * The total taxes of the order's shipping excluding promotions.
     *
     * @var float|null
     */
    protected $originalShippingTaxTotal;
    /**
     * The order's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * The order's credit lines, useful to add additional payment amounts for an order.
     *
     * @var list<OrderCreditLine>|null
     */
    protected $creditLines;
    /**
     * Whether the order is a draft order.
     *
     * @var bool|null
     */
    protected $isDraftOrder;
    /**
     * The date the order was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The order's credit line total.
     *
     * @var float|null
     */
    protected $creditLineTotal;
    /**
     * The order's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The order's ID.
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
     * The order's version.
     *
     * @return float|null
     */
    public function getVersion(): ?float
    {
        return $this->version;
    }
    /**
     * The order's version.
     *
     * @param float|null $version
     *
     * @return self
     */
    public function setVersion(?float $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getOrderChange(): ?iterable
    {
        return $this->orderChange;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $orderChange
     *
     * @return self
     */
    public function setOrderChange(?iterable $orderChange): self
    {
        $this->initialized['orderChange'] = true;
        $this->orderChange = $orderChange;
        return $this;
    }
    /**
     * The order's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The order's status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The ID of the region the order belongs to.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the region the order belongs to.
     *
     * @param string|null $regionId
     *
     * @return self
     */
    public function setRegionId(?string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * The ID of the customer that placed the order.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer that placed the order.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The ID of the sales channel the order was placed in.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the sales channel the order was placed in.
     *
     * @param string|null $salesChannelId
     *
     * @return self
     */
    public function setSalesChannelId(?string $salesChannelId): self
    {
        $this->initialized['salesChannelId'] = true;
        $this->salesChannelId = $salesChannelId;
        return $this;
    }
    /**
     * The email of the customer that placed the order.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email of the customer that placed the order.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The order's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The order's currency code.
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
     * The address's details.
     *
     * @return OrderAddress|null
     */
    public function getShippingAddress(): ?OrderAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The address's details.
     *
     * @param OrderAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?OrderAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The address's details.
     *
     * @return OrderAddress|null
     */
    public function getBillingAddress(): ?OrderAddress
    {
        return $this->billingAddress;
    }
    /**
     * The address's details.
     *
     * @param OrderAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?OrderAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The order's items.
     *
     * @return list<OrderLineItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The order's items.
     *
     * @param list<OrderLineItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The order's shipping methods.
     *
     * @return list<OrderShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The order's shipping methods.
     *
     * @param list<OrderShippingMethod>|null $shippingMethods
     *
     * @return self
     */
    public function setShippingMethods(?array $shippingMethods): self
    {
        $this->initialized['shippingMethods'] = true;
        $this->shippingMethods = $shippingMethods;
        return $this;
    }
    /**
     * The order's transactions.
     *
     * @return list<OrderTransaction>|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }
    /**
     * The order's transactions.
     *
     * @param list<OrderTransaction>|null $transactions
     *
     * @return self
     */
    public function setTransactions(?array $transactions): self
    {
        $this->initialized['transactions'] = true;
        $this->transactions = $transactions;
        return $this;
    }
    /**
     * The order's summary.
     *
     * @return OrderSummary|null
     */
    public function getSummary(): ?OrderSummary
    {
        return $this->summary;
    }
    /**
     * The order's summary.
     *
     * @param OrderSummary|null $summary
     *
     * @return self
     */
    public function setSummary(?OrderSummary $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The order's metadata, can hold custom key-value pairs.
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
     * The date the order was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the order was canceled.
     *
     * @param \DateTime|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?\DateTime $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * The date the order was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the order was created.
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
     * The date the order was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the order was updated.
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
     * The order items' total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTotal(): ?float
    {
        return $this->originalItemTotal;
    }
    /**
     * The order items' total including taxes, excluding promotions.
     *
     * @param float|null $originalItemTotal
     *
     * @return self
     */
    public function setOriginalItemTotal(?float $originalItemTotal): self
    {
        $this->initialized['originalItemTotal'] = true;
        $this->originalItemTotal = $originalItemTotal;
        return $this;
    }
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalItemSubtotal(): ?float
    {
        return $this->originalItemSubtotal;
    }
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @param float|null $originalItemSubtotal
     *
     * @return self
     */
    public function setOriginalItemSubtotal(?float $originalItemSubtotal): self
    {
        $this->initialized['originalItemSubtotal'] = true;
        $this->originalItemSubtotal = $originalItemSubtotal;
        return $this;
    }
    /**
     * The taxes total for order items, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTaxTotal(): ?float
    {
        return $this->originalItemTaxTotal;
    }
    /**
     * The taxes total for order items, excluding promotions.
     *
     * @param float|null $originalItemTaxTotal
     *
     * @return self
     */
    public function setOriginalItemTaxTotal(?float $originalItemTaxTotal): self
    {
        $this->initialized['originalItemTaxTotal'] = true;
        $this->originalItemTaxTotal = $originalItemTaxTotal;
        return $this;
    }
    /**
     * The order items' total including taxes and promotions.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The order items' total including taxes and promotions.
     *
     * @param float|null $itemTotal
     *
     * @return self
     */
    public function setItemTotal(?float $itemTotal): self
    {
        $this->initialized['itemTotal'] = true;
        $this->itemTotal = $itemTotal;
        return $this;
    }
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The order items' total excluding taxes, including promotions.
     *
     * @param float|null $itemSubtotal
     *
     * @return self
     */
    public function setItemSubtotal(?float $itemSubtotal): self
    {
        $this->initialized['itemSubtotal'] = true;
        $this->itemSubtotal = $itemSubtotal;
        return $this;
    }
    /**
     * The tax total of the order items including promotions.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The tax total of the order items including promotions.
     *
     * @param float|null $itemTaxTotal
     *
     * @return self
     */
    public function setItemTaxTotal(?float $itemTaxTotal): self
    {
        $this->initialized['itemTaxTotal'] = true;
        $this->itemTaxTotal = $itemTaxTotal;
        return $this;
    }
    /**
     * The order's total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The order's total including taxes, excluding promotions.
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
     * The order's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The order's total excluding taxes, including promotions.
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
     * The tax total of the order excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The tax total of the order excluding promotions.
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
     * The order's total including taxes and promotions.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The order's total including taxes and promotions.
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
     * The order's subtotal excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The order's subtotal excluding taxes, including promotions.
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
     * The tax total of the order including promotions.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The tax total of the order including promotions.
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
     * The total discount excluding taxes.
     *
     * @return float|null
     */
    public function getDiscountSubtotal(): ?float
    {
        return $this->discountSubtotal;
    }
    /**
     * The total discount excluding taxes.
     *
     * @param float|null $discountSubtotal
     *
     * @return self
     */
    public function setDiscountSubtotal(?float $discountSubtotal): self
    {
        $this->initialized['discountSubtotal'] = true;
        $this->discountSubtotal = $discountSubtotal;
        return $this;
    }
    /**
     * The total discount including taxes.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The total discount including taxes.
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
     * The tax total applied on the discount.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The tax total applied on the discount.
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
     * The order's gift card total.
     *
     * @return float|null
     */
    public function getGiftCardTotal(): ?float
    {
        return $this->giftCardTotal;
    }
    /**
     * The order's gift card total.
     *
     * @param float|null $giftCardTotal
     *
     * @return self
     */
    public function setGiftCardTotal(?float $giftCardTotal): self
    {
        $this->initialized['giftCardTotal'] = true;
        $this->giftCardTotal = $giftCardTotal;
        return $this;
    }
    /**
     * The order's gift card tax total.
     *
     * @return float|null
     */
    public function getGiftCardTaxTotal(): ?float
    {
        return $this->giftCardTaxTotal;
    }
    /**
     * The order's gift card tax total.
     *
     * @param float|null $giftCardTaxTotal
     *
     * @return self
     */
    public function setGiftCardTaxTotal(?float $giftCardTaxTotal): self
    {
        $this->initialized['giftCardTaxTotal'] = true;
        $this->giftCardTaxTotal = $giftCardTaxTotal;
        return $this;
    }
    /**
     * The order's shipping total including taxes and promotions.
     *
     * @return float|null
     */
    public function getShippingTotal(): ?float
    {
        return $this->shippingTotal;
    }
    /**
     * The order's shipping total including taxes and promotions.
     *
     * @param float|null $shippingTotal
     *
     * @return self
     */
    public function setShippingTotal(?float $shippingTotal): self
    {
        $this->initialized['shippingTotal'] = true;
        $this->shippingTotal = $shippingTotal;
        return $this;
    }
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getShippingSubtotal(): ?float
    {
        return $this->shippingSubtotal;
    }
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @param float|null $shippingSubtotal
     *
     * @return self
     */
    public function setShippingSubtotal(?float $shippingSubtotal): self
    {
        $this->initialized['shippingSubtotal'] = true;
        $this->shippingSubtotal = $shippingSubtotal;
        return $this;
    }
    /**
     * The total taxes of the order's shipping including taxes.
     *
     * @return float|null
     */
    public function getShippingTaxTotal(): ?float
    {
        return $this->shippingTaxTotal;
    }
    /**
     * The total taxes of the order's shipping including taxes.
     *
     * @param float|null $shippingTaxTotal
     *
     * @return self
     */
    public function setShippingTaxTotal(?float $shippingTaxTotal): self
    {
        $this->initialized['shippingTaxTotal'] = true;
        $this->shippingTaxTotal = $shippingTaxTotal;
        return $this;
    }
    /**
     * The order's shipping total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingTotal(): ?float
    {
        return $this->originalShippingTotal;
    }
    /**
     * The order's shipping total including taxes, excluding promotions.
     *
     * @param float|null $originalShippingTotal
     *
     * @return self
     */
    public function setOriginalShippingTotal(?float $originalShippingTotal): self
    {
        $this->initialized['originalShippingTotal'] = true;
        $this->originalShippingTotal = $originalShippingTotal;
        return $this;
    }
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingSubtotal(): ?float
    {
        return $this->originalShippingSubtotal;
    }
    /**
     * The order's shipping total excluding taxes, including promotions.
     *
     * @param float|null $originalShippingSubtotal
     *
     * @return self
     */
    public function setOriginalShippingSubtotal(?float $originalShippingSubtotal): self
    {
        $this->initialized['originalShippingSubtotal'] = true;
        $this->originalShippingSubtotal = $originalShippingSubtotal;
        return $this;
    }
    /**
     * The total taxes of the order's shipping excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingTaxTotal(): ?float
    {
        return $this->originalShippingTaxTotal;
    }
    /**
     * The total taxes of the order's shipping excluding promotions.
     *
     * @param float|null $originalShippingTaxTotal
     *
     * @return self
     */
    public function setOriginalShippingTaxTotal(?float $originalShippingTaxTotal): self
    {
        $this->initialized['originalShippingTaxTotal'] = true;
        $this->originalShippingTaxTotal = $originalShippingTaxTotal;
        return $this;
    }
    /**
     * The order's display ID.
     *
     * @return float|null
     */
    public function getDisplayId(): ?float
    {
        return $this->displayId;
    }
    /**
     * The order's display ID.
     *
     * @param float|null $displayId
     *
     * @return self
     */
    public function setDisplayId(?float $displayId): self
    {
        $this->initialized['displayId'] = true;
        $this->displayId = $displayId;
        return $this;
    }
    /**
     * The order's credit lines, useful to add additional payment amounts for an order.
     *
     * @return list<OrderCreditLine>|null
     */
    public function getCreditLines(): ?array
    {
        return $this->creditLines;
    }
    /**
     * The order's credit lines, useful to add additional payment amounts for an order.
     *
     * @param list<OrderCreditLine>|null $creditLines
     *
     * @return self
     */
    public function setCreditLines(?array $creditLines): self
    {
        $this->initialized['creditLines'] = true;
        $this->creditLines = $creditLines;
        return $this;
    }
    /**
     * Whether the order is a draft order.
     *
     * @return bool|null
     */
    public function getIsDraftOrder(): ?bool
    {
        return $this->isDraftOrder;
    }
    /**
     * Whether the order is a draft order.
     *
     * @param bool|null $isDraftOrder
     *
     * @return self
     */
    public function setIsDraftOrder(?bool $isDraftOrder): self
    {
        $this->initialized['isDraftOrder'] = true;
        $this->isDraftOrder = $isDraftOrder;
        return $this;
    }
    /**
     * The date the order was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the order was deleted.
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
    /**
     * The order's credit line total.
     *
     * @return float|null
     */
    public function getCreditLineTotal(): ?float
    {
        return $this->creditLineTotal;
    }
    /**
     * The order's credit line total.
     *
     * @param float|null $creditLineTotal
     *
     * @return self
     */
    public function setCreditLineTotal(?float $creditLineTotal): self
    {
        $this->initialized['creditLineTotal'] = true;
        $this->creditLineTotal = $creditLineTotal;
        return $this;
    }
}