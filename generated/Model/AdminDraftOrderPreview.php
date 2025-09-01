<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminDraftOrderPreview extends \ArrayObject
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
     * The total of the requested return.
     *
     * @var float|null
     */
    protected $returnRequestedTotal;
    /**
     * The order change's details.
     *
     * @var AdminOrderChange|null
     */
    protected $orderChange;
    /**
     * The order's items.
     *
     * @var list<AdminDraftOrderPreviewItemsItem>|null
     */
    protected $items;
    /**
     * The order's shipping methods.
     *
     * @var list<AdminDraftOrderPreviewShippingMethodsItem>|null
     */
    protected $shippingMethods;
    /**
     * The order's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The order's version when this preview is applied.
     *
     * @var float|null
     */
    protected $version;
    /**
     * The order's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the order's associated region.
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
     * The ID of the sales channel that the order was placed in.
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
     * The order's display ID.
     *
     * @var float|null
     */
    protected $displayId;
    /**
     * An order address.
     *
     * @var AdminOrderAddress|null
     */
    protected $shippingAddress;
    /**
     * An order address.
     *
     * @var AdminOrderAddress|null
     */
    protected $billingAddress;
    /**
     * The order's payment collections.
     *
     * @var list<AdminPaymentCollection>|null
     */
    protected $paymentCollections;
    /**
     * The order's payment status.
     *
     * @var string|null
     */
    protected $paymentStatus;
    /**
     * The order's fulfillments.
     *
     * @var list<AdminOrderFulfillment>|null
     */
    protected $fulfillments;
    /**
     * The order's fulfillment status.
     *
     * @var string|null
     */
    protected $fulfillmentStatus;
    /**
     * The order's transactions.
     *
     * @var list<BaseOrderTransaction>|null
     */
    protected $transactions;
    /**
     * The order's summary details.
     *
     * @var BaseOrderSummary|null
     */
    protected $summary;
    /**
     * The order's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The total of the order's items including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTotal;
    /**
     * The total of the order's items excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalItemSubtotal;
    /**
     * The tax total of the order's items excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTaxTotal;
    /**
     * The total of the order's items including taxes and promotions.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The total of the order's items excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The tax total of the order's items including promotions.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The order's total excluding promotions, including taxes.
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
     * The order's tax total, excluding promotions.
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
     * The order's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The order's tax total including promotions.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The order's discount or promotions total.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The tax total of order's discount or promotion.
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
     * The tax total of the order's gift card.
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
     * The tax total of the order's shipping.
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
     * The tax total of the order's shipping excluding promotions.
     *
     * @var float|null
     */
    protected $originalShippingTaxTotal;
    /**
     * The customer's details.
     *
     * @var AdminCustomer|null
     */
    protected $customer;
    /**
     * The sales channel's details.
     *
     * @var AdminSalesChannel|null
     */
    protected $salesChannel;
    /**
     * The order's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The region's details.
     *
     * @var AdminRegion|null
     */
    protected $region;
    /**
     * The order preview's credit lines.
     *
     * @var list<OrderCreditLine>|null
     */
    protected $creditLines;
    /**
     * The draft order preview's credit line total.
     *
     * @var float|null
     */
    protected $creditLineTotal;
    /**
     * The total of the requested return.
     *
     * @return float|null
     */
    public function getReturnRequestedTotal(): ?float
    {
        return $this->returnRequestedTotal;
    }
    /**
     * The total of the requested return.
     *
     * @param float|null $returnRequestedTotal
     *
     * @return self
     */
    public function setReturnRequestedTotal(?float $returnRequestedTotal): self
    {
        $this->initialized['returnRequestedTotal'] = true;
        $this->returnRequestedTotal = $returnRequestedTotal;
        return $this;
    }
    /**
     * The order change's details.
     *
     * @return AdminOrderChange|null
     */
    public function getOrderChange(): ?AdminOrderChange
    {
        return $this->orderChange;
    }
    /**
     * The order change's details.
     *
     * @param AdminOrderChange|null $orderChange
     *
     * @return self
     */
    public function setOrderChange(?AdminOrderChange $orderChange): self
    {
        $this->initialized['orderChange'] = true;
        $this->orderChange = $orderChange;
        return $this;
    }
    /**
     * The order's items.
     *
     * @return list<AdminDraftOrderPreviewItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The order's items.
     *
     * @param list<AdminDraftOrderPreviewItemsItem>|null $items
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
     * @return list<AdminDraftOrderPreviewShippingMethodsItem>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The order's shipping methods.
     *
     * @param list<AdminDraftOrderPreviewShippingMethodsItem>|null $shippingMethods
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
     * The order's version when this preview is applied.
     *
     * @return float|null
     */
    public function getVersion(): ?float
    {
        return $this->version;
    }
    /**
     * The order's version when this preview is applied.
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
     * The ID of the order's associated region.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the order's associated region.
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
     * The ID of the sales channel that the order was placed in.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the sales channel that the order was placed in.
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
     * An order address.
     *
     * @return AdminOrderAddress|null
     */
    public function getShippingAddress(): ?AdminOrderAddress
    {
        return $this->shippingAddress;
    }
    /**
     * An order address.
     *
     * @param AdminOrderAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?AdminOrderAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * An order address.
     *
     * @return AdminOrderAddress|null
     */
    public function getBillingAddress(): ?AdminOrderAddress
    {
        return $this->billingAddress;
    }
    /**
     * An order address.
     *
     * @param AdminOrderAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?AdminOrderAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The order's payment collections.
     *
     * @return list<AdminPaymentCollection>|null
     */
    public function getPaymentCollections(): ?array
    {
        return $this->paymentCollections;
    }
    /**
     * The order's payment collections.
     *
     * @param list<AdminPaymentCollection>|null $paymentCollections
     *
     * @return self
     */
    public function setPaymentCollections(?array $paymentCollections): self
    {
        $this->initialized['paymentCollections'] = true;
        $this->paymentCollections = $paymentCollections;
        return $this;
    }
    /**
     * The order's payment status.
     *
     * @return string|null
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }
    /**
     * The order's payment status.
     *
     * @param string|null $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(?string $paymentStatus): self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * The order's fulfillments.
     *
     * @return list<AdminOrderFulfillment>|null
     */
    public function getFulfillments(): ?array
    {
        return $this->fulfillments;
    }
    /**
     * The order's fulfillments.
     *
     * @param list<AdminOrderFulfillment>|null $fulfillments
     *
     * @return self
     */
    public function setFulfillments(?array $fulfillments): self
    {
        $this->initialized['fulfillments'] = true;
        $this->fulfillments = $fulfillments;
        return $this;
    }
    /**
     * The order's fulfillment status.
     *
     * @return string|null
     */
    public function getFulfillmentStatus(): ?string
    {
        return $this->fulfillmentStatus;
    }
    /**
     * The order's fulfillment status.
     *
     * @param string|null $fulfillmentStatus
     *
     * @return self
     */
    public function setFulfillmentStatus(?string $fulfillmentStatus): self
    {
        $this->initialized['fulfillmentStatus'] = true;
        $this->fulfillmentStatus = $fulfillmentStatus;
        return $this;
    }
    /**
     * The order's transactions.
     *
     * @return list<BaseOrderTransaction>|null
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }
    /**
     * The order's transactions.
     *
     * @param list<BaseOrderTransaction>|null $transactions
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
     * The order's summary details.
     *
     * @return BaseOrderSummary|null
     */
    public function getSummary(): ?BaseOrderSummary
    {
        return $this->summary;
    }
    /**
     * The order's summary details.
     *
     * @param BaseOrderSummary|null $summary
     *
     * @return self
     */
    public function setSummary(?BaseOrderSummary $summary): self
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
     * The total of the order's items including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTotal(): ?float
    {
        return $this->originalItemTotal;
    }
    /**
     * The total of the order's items including taxes, excluding promotions.
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
     * The total of the order's items excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalItemSubtotal(): ?float
    {
        return $this->originalItemSubtotal;
    }
    /**
     * The total of the order's items excluding taxes, including promotions.
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
     * The tax total of the order's items excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTaxTotal(): ?float
    {
        return $this->originalItemTaxTotal;
    }
    /**
     * The tax total of the order's items excluding promotions.
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
     * The total of the order's items including taxes and promotions.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The total of the order's items including taxes and promotions.
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
     * The total of the order's items excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The total of the order's items excluding taxes, including promotions.
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
     * The tax total of the order's items including promotions.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The tax total of the order's items including promotions.
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
     * The order's total excluding promotions, including taxes.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The order's total excluding promotions, including taxes.
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
     * The order's tax total, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The order's tax total, excluding promotions.
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
     * The order's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The order's total excluding taxes, including promotions.
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
     * The order's tax total including promotions.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The order's tax total including promotions.
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
     * The order's discount or promotions total.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The order's discount or promotions total.
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
     * The tax total of order's discount or promotion.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The tax total of order's discount or promotion.
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
     * The tax total of the order's gift card.
     *
     * @return float|null
     */
    public function getGiftCardTaxTotal(): ?float
    {
        return $this->giftCardTaxTotal;
    }
    /**
     * The tax total of the order's gift card.
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
     * The tax total of the order's shipping.
     *
     * @return float|null
     */
    public function getShippingTaxTotal(): ?float
    {
        return $this->shippingTaxTotal;
    }
    /**
     * The tax total of the order's shipping.
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
     * The tax total of the order's shipping excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingTaxTotal(): ?float
    {
        return $this->originalShippingTaxTotal;
    }
    /**
     * The tax total of the order's shipping excluding promotions.
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
     * The customer's details.
     *
     * @return AdminCustomer|null
     */
    public function getCustomer(): ?AdminCustomer
    {
        return $this->customer;
    }
    /**
     * The customer's details.
     *
     * @param AdminCustomer|null $customer
     *
     * @return self
     */
    public function setCustomer(?AdminCustomer $customer): self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * The sales channel's details.
     *
     * @return AdminSalesChannel|null
     */
    public function getSalesChannel(): ?AdminSalesChannel
    {
        return $this->salesChannel;
    }
    /**
     * The sales channel's details.
     *
     * @param AdminSalesChannel|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?AdminSalesChannel $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
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
     * The region's details.
     *
     * @return AdminRegion|null
     */
    public function getRegion(): ?AdminRegion
    {
        return $this->region;
    }
    /**
     * The region's details.
     *
     * @param AdminRegion|null $region
     *
     * @return self
     */
    public function setRegion(?AdminRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The order preview's credit lines.
     *
     * @return list<OrderCreditLine>|null
     */
    public function getCreditLines(): ?array
    {
        return $this->creditLines;
    }
    /**
     * The order preview's credit lines.
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
     * The draft order preview's credit line total.
     *
     * @return float|null
     */
    public function getCreditLineTotal(): ?float
    {
        return $this->creditLineTotal;
    }
    /**
     * The draft order preview's credit line total.
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