<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseCart extends \ArrayObject
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
     * @var BaseRegion|null
     */
    protected $region;
    /**
     * The cart's region id.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The cart's customer id.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The cart's sales channel id.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The cart's email.
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
     * The cart's shipping address.
     *
     * @var array<string, mixed>|null
     */
    protected $shippingAddress;
    /**
     * The cart's shipping address.
     *
     * @var array<string, mixed>|null
     */
    protected $billingAddress;
    /**
     * The cart's items.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $items;
    /**
     * The cart's shipping methods.
     *
     * @var list<BaseCartShippingMethod>|null
     */
    protected $shippingMethods;
    /**
     * The payment collection's details.
     *
     * @var BasePaymentCollection|null
     */
    protected $paymentCollection;
    /**
     * The cart's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The cart's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The cart's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The cart's original item total.
     *
     * @var float|null
     */
    protected $originalItemTotal;
    /**
     * The cart's original item subtotal.
     *
     * @var float|null
     */
    protected $originalItemSubtotal;
    /**
     * The cart's original item tax total.
     *
     * @var float|null
     */
    protected $originalItemTaxTotal;
    /**
     * The cart's item total.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The cart's item subtotal.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The cart's item tax total.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The cart's original total.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The cart's original subtotal.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The cart's original tax total.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The cart's total.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The cart's subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The cart's tax total.
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
     * The cart's discount tax total.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The cart's gift card total.
     *
     * @var float|null
     */
    protected $giftCardTotal;
    /**
     * The cart's gift card tax total.
     *
     * @var float|null
     */
    protected $giftCardTaxTotal;
    /**
     * The cart's shipping total.
     *
     * @var float|null
     */
    protected $shippingTotal;
    /**
     * The cart's shipping subtotal.
     *
     * @var float|null
     */
    protected $shippingSubtotal;
    /**
     * The cart's shipping tax total.
     *
     * @var float|null
     */
    protected $shippingTaxTotal;
    /**
     * The cart's original shipping total.
     *
     * @var float|null
     */
    protected $originalShippingTotal;
    /**
     * The cart's original shipping subtotal.
     *
     * @var float|null
     */
    protected $originalShippingSubtotal;
    /**
     * The cart's original shipping tax total.
     *
     * @var float|null
     */
    protected $originalShippingTaxTotal;
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
     * @return BaseRegion|null
     */
    public function getRegion(): ?BaseRegion
    {
        return $this->region;
    }
    /**
     * The region's details.
     *
     * @param BaseRegion|null $region
     *
     * @return self
     */
    public function setRegion(?BaseRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The cart's region id.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The cart's region id.
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
     * The cart's customer id.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The cart's customer id.
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
     * The cart's sales channel id.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The cart's sales channel id.
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
     * The cart's email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The cart's email.
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
     * The cart's shipping address.
     *
     * @return array<string, mixed>|null
     */
    public function getShippingAddress(): ?iterable
    {
        return $this->shippingAddress;
    }
    /**
     * The cart's shipping address.
     *
     * @param array<string, mixed>|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?iterable $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The cart's shipping address.
     *
     * @return array<string, mixed>|null
     */
    public function getBillingAddress(): ?iterable
    {
        return $this->billingAddress;
    }
    /**
     * The cart's shipping address.
     *
     * @param array<string, mixed>|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?iterable $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The cart's items.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The cart's items.
     *
     * @param list<array<string, mixed>>|null $items
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
     * @return list<BaseCartShippingMethod>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The cart's shipping methods.
     *
     * @param list<BaseCartShippingMethod>|null $shippingMethods
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
     * @return BasePaymentCollection|null
     */
    public function getPaymentCollection(): ?BasePaymentCollection
    {
        return $this->paymentCollection;
    }
    /**
     * The payment collection's details.
     *
     * @param BasePaymentCollection|null $paymentCollection
     *
     * @return self
     */
    public function setPaymentCollection(?BasePaymentCollection $paymentCollection): self
    {
        $this->initialized['paymentCollection'] = true;
        $this->paymentCollection = $paymentCollection;
        return $this;
    }
    /**
     * The cart's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The cart's metadata.
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
     * The cart's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The cart's created at.
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
     * The cart's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The cart's updated at.
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
     * The cart's original item total.
     *
     * @return float|null
     */
    public function getOriginalItemTotal(): ?float
    {
        return $this->originalItemTotal;
    }
    /**
     * The cart's original item total.
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
     * The cart's original item subtotal.
     *
     * @return float|null
     */
    public function getOriginalItemSubtotal(): ?float
    {
        return $this->originalItemSubtotal;
    }
    /**
     * The cart's original item subtotal.
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
     * The cart's original item tax total.
     *
     * @return float|null
     */
    public function getOriginalItemTaxTotal(): ?float
    {
        return $this->originalItemTaxTotal;
    }
    /**
     * The cart's original item tax total.
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
     * The cart's item total.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The cart's item total.
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
     * The cart's item subtotal.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The cart's item subtotal.
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
     * The cart's item tax total.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The cart's item tax total.
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
     * The cart's original total.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The cart's original total.
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
     * The cart's original subtotal.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The cart's original subtotal.
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
     * The cart's original tax total.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The cart's original tax total.
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
     * The cart's total.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The cart's total.
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
     * The cart's subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The cart's subtotal.
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
     * The cart's tax total.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The cart's tax total.
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
     * The cart's discount tax total.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The cart's discount tax total.
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
     * The cart's gift card total.
     *
     * @return float|null
     */
    public function getGiftCardTotal(): ?float
    {
        return $this->giftCardTotal;
    }
    /**
     * The cart's gift card total.
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
     * The cart's gift card tax total.
     *
     * @return float|null
     */
    public function getGiftCardTaxTotal(): ?float
    {
        return $this->giftCardTaxTotal;
    }
    /**
     * The cart's gift card tax total.
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
     * The cart's shipping total.
     *
     * @return float|null
     */
    public function getShippingTotal(): ?float
    {
        return $this->shippingTotal;
    }
    /**
     * The cart's shipping total.
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
     * The cart's shipping subtotal.
     *
     * @return float|null
     */
    public function getShippingSubtotal(): ?float
    {
        return $this->shippingSubtotal;
    }
    /**
     * The cart's shipping subtotal.
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
     * The cart's shipping tax total.
     *
     * @return float|null
     */
    public function getShippingTaxTotal(): ?float
    {
        return $this->shippingTaxTotal;
    }
    /**
     * The cart's shipping tax total.
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
     * The cart's original shipping total.
     *
     * @return float|null
     */
    public function getOriginalShippingTotal(): ?float
    {
        return $this->originalShippingTotal;
    }
    /**
     * The cart's original shipping total.
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
     * The cart's original shipping subtotal.
     *
     * @return float|null
     */
    public function getOriginalShippingSubtotal(): ?float
    {
        return $this->originalShippingSubtotal;
    }
    /**
     * The cart's original shipping subtotal.
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
     * The cart's original shipping tax total.
     *
     * @return float|null
     */
    public function getOriginalShippingTaxTotal(): ?float
    {
        return $this->originalShippingTaxTotal;
    }
    /**
     * The cart's original shipping tax total.
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
}