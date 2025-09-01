<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCart extends \ArrayObject
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
     * The cart's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The region's details.
     *
     * @var StoreRegion|null
     */
    protected $region;
    /**
     * The ID of the region the cart belongs to.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The ID of the customer the cart belongs to.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The ID of the cart's sales channel. Only products that belong to the same sales channel can be added to the cart. The created order will be associated with the same sales channel.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The email of the customer the cart belongs to.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The cart's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The address's details.
     *
     * @var StoreCartAddress|null
     */
    protected $shippingAddress;
    /**
     * The address's details.
     *
     * @var StoreCartAddress|null
     */
    protected $billingAddress;
    /**
     * The cart's items.
     *
     * @var list<StoreCartLineItem>|null
     */
    protected $items;
    /**
     * The cart's shipping methods.
     *
     * @var list<StoreCartShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The payment collection's details.
     *
     * @var StorePaymentCollection|null
     */
    protected $paymentCollection;
    /**
     * The cart's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the cart was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the cart was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The cart items' total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTotal;
    /**
     * The cart items' total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalItemSubtotal;
    /**
     * The cart items' tax total excluding promotions.
     *
     * @var float|null
     */
    protected $originalItemTaxTotal;
    /**
     * The cart items' total including taxes and promotions.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The cart items' total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The cart items' tax total including promotions.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The cart's total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The cart's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The cart's tax total excluding promotions.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The cart's total including taxes and promotions.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The cart's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The cart's tax total including promotions.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The cart's discount total.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The tax total applied on the discounted amount.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The total gift card amount applied on the cart.
     *
     * @var float|null
     */
    protected $giftCardTotal;
    /**
     * The total taxes applied on the gift card amount.
     *
     * @var float|null
     */
    protected $giftCardTaxTotal;
    /**
     * The cart's shipping total including taxes and promotions.
     *
     * @var float|null
     */
    protected $shippingTotal;
    /**
     * The cart's shipping total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $shippingSubtotal;
    /**
     * The total taxes applied on the cart's shipping amount.
     *
     * @var float|null
     */
    protected $shippingTaxTotal;
    /**
     * The cart's shipping total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalShippingTotal;
    /**
     * The cart's shipping total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalShippingSubtotal;
    /**
     * The total taxes applied on the cart's shipping amount.
     *
     * @var float|null
     */
    protected $originalShippingTaxTotal;
    /**
     * The cart's promotions.
     *
     * @var list<StoreCartPromotion>|null
     */
    protected $promotions;
    /**
     * The cart's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The cart's ID.
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
     * The region's details.
     *
     * @return StoreRegion|null
     */
    public function getRegion(): ?StoreRegion
    {
        return $this->region;
    }
    /**
     * The region's details.
     *
     * @param StoreRegion|null $region
     *
     * @return self
     */
    public function setRegion(?StoreRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The ID of the region the cart belongs to.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the region the cart belongs to.
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
     * The ID of the customer the cart belongs to.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer the cart belongs to.
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
     * The ID of the cart's sales channel. Only products that belong to the same sales channel can be added to the cart. The created order will be associated with the same sales channel.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the cart's sales channel. Only products that belong to the same sales channel can be added to the cart. The created order will be associated with the same sales channel.
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
     * The email of the customer the cart belongs to.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email of the customer the cart belongs to.
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
     * The cart's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The cart's currency code.
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
     * @return StoreCartAddress|null
     */
    public function getShippingAddress(): ?StoreCartAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The address's details.
     *
     * @param StoreCartAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?StoreCartAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The address's details.
     *
     * @return StoreCartAddress|null
     */
    public function getBillingAddress(): ?StoreCartAddress
    {
        return $this->billingAddress;
    }
    /**
     * The address's details.
     *
     * @param StoreCartAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?StoreCartAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The cart's items.
     *
     * @return list<StoreCartLineItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The cart's items.
     *
     * @param list<StoreCartLineItem>|null $items
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
     * The cart's shipping methods.
     *
     * @return list<StoreCartShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The cart's shipping methods.
     *
     * @param list<StoreCartShippingMethod>|null $shippingMethods
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
     * The payment collection's details.
     *
     * @return StorePaymentCollection|null
     */
    public function getPaymentCollection(): ?StorePaymentCollection
    {
        return $this->paymentCollection;
    }
    /**
     * The payment collection's details.
     *
     * @param StorePaymentCollection|null $paymentCollection
     *
     * @return self
     */
    public function setPaymentCollection(?StorePaymentCollection $paymentCollection): self
    {
        $this->initialized['paymentCollection'] = true;
        $this->paymentCollection = $paymentCollection;
        return $this;
    }
    /**
     * The cart's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The cart's metadata, can hold custom key-value pairs.
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
     * The date the cart was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the cart was created.
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
     * The date the cart was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the cart was updated.
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
     * The cart items' total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTotal(): ?float
    {
        return $this->originalItemTotal;
    }
    /**
     * The cart items' total including taxes, excluding promotions.
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
     * The cart items' total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalItemSubtotal(): ?float
    {
        return $this->originalItemSubtotal;
    }
    /**
     * The cart items' total excluding taxes, including promotions.
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
     * The cart items' tax total excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalItemTaxTotal(): ?float
    {
        return $this->originalItemTaxTotal;
    }
    /**
     * The cart items' tax total excluding promotions.
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
     * The cart items' total including taxes and promotions.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The cart items' total including taxes and promotions.
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
     * The cart items' total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The cart items' total excluding taxes, including promotions.
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
     * The cart items' tax total including promotions.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The cart items' tax total including promotions.
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
     * The cart's total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The cart's total including taxes, excluding promotions.
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
     * The cart's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The cart's total excluding taxes, including promotions.
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
     * The cart's tax total excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The cart's tax total excluding promotions.
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
     * The cart's total including taxes and promotions.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The cart's total including taxes and promotions.
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
     * The cart's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The cart's total excluding taxes, including promotions.
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
     * The cart's tax total including promotions.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The cart's tax total including promotions.
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
     * The cart's discount total.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The cart's discount total.
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
     * The tax total applied on the discounted amount.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The tax total applied on the discounted amount.
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
     * The total gift card amount applied on the cart.
     *
     * @return float|null
     */
    public function getGiftCardTotal(): ?float
    {
        return $this->giftCardTotal;
    }
    /**
     * The total gift card amount applied on the cart.
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
     * The total taxes applied on the gift card amount.
     *
     * @return float|null
     */
    public function getGiftCardTaxTotal(): ?float
    {
        return $this->giftCardTaxTotal;
    }
    /**
     * The total taxes applied on the gift card amount.
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
     * The cart's shipping total including taxes and promotions.
     *
     * @return float|null
     */
    public function getShippingTotal(): ?float
    {
        return $this->shippingTotal;
    }
    /**
     * The cart's shipping total including taxes and promotions.
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
     * The cart's shipping total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getShippingSubtotal(): ?float
    {
        return $this->shippingSubtotal;
    }
    /**
     * The cart's shipping total excluding taxes, including promotions.
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
     * The total taxes applied on the cart's shipping amount.
     *
     * @return float|null
     */
    public function getShippingTaxTotal(): ?float
    {
        return $this->shippingTaxTotal;
    }
    /**
     * The total taxes applied on the cart's shipping amount.
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
     * The cart's shipping total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingTotal(): ?float
    {
        return $this->originalShippingTotal;
    }
    /**
     * The cart's shipping total including taxes, excluding promotions.
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
     * The cart's shipping total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalShippingSubtotal(): ?float
    {
        return $this->originalShippingSubtotal;
    }
    /**
     * The cart's shipping total excluding taxes, including promotions.
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
     * The total taxes applied on the cart's shipping amount.
     *
     * @return float|null
     */
    public function getOriginalShippingTaxTotal(): ?float
    {
        return $this->originalShippingTaxTotal;
    }
    /**
     * The total taxes applied on the cart's shipping amount.
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
     * The cart's promotions.
     *
     * @return list<StoreCartPromotion>|null
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }
    /**
     * The cart's promotions.
     *
     * @param list<StoreCartPromotion>|null $promotions
     *
     * @return self
     */
    public function setPromotions(?array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;
        return $this;
    }
}