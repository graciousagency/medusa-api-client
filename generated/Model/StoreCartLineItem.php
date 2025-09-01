<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCartLineItem extends \ArrayObject
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
     * The item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The item's subtitle.
     *
     * @var string|null
     */
    protected $subtitle;
    /**
     * The item's thumbnail URL.
     *
     * @var string|null
     */
    protected $thumbnail;
    /**
     * The item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The product's details.
     *
     * @var StoreProduct|null
     */
    protected $product;
    /**
     * The ID of the associated product.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * The item's product title.
     *
     * @var string|null
     */
    protected $productTitle;
    /**
     * The item's product description.
     *
     * @var string|null
     */
    protected $productDescription;
    /**
     * The item's product subtitle.
     *
     * @var string|null
     */
    protected $productSubtitle;
    /**
     * The ID of the associated product's type.
     *
     * @var string|null
     */
    protected $productType;
    /**
     * The ID of the associated product's collection.
     *
     * @var string|null
     */
    protected $productCollection;
    /**
     * The item's product handle.
     *
     * @var string|null
     */
    protected $productHandle;
    /**
     * The variant's details.
     *
     * @var StoreProductVariant|null
     */
    protected $variant;
    /**
     * The ID of the associated product variant.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * The item's variant SKU.
     *
     * @var string|null
     */
    protected $variantSku;
    /**
     * The item's variant barcode.
     *
     * @var string|null
     */
    protected $variantBarcode;
    /**
     * The item's variant title.
     *
     * @var string|null
     */
    protected $variantTitle;
    /**
     * The associated variant's value for the product's options.
     *
     * @var array<string, mixed>|null
     */
    protected $variantOptionValues;
    /**
     * Whether the item requires shipping.
     *
     * @var bool|null
     */
    protected $requiresShipping;
    /**
     * Whether the item is discountable.
     *
     * @var bool|null
     */
    protected $isDiscountable;
    /**
     * Whether the item's price includes taxes.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The original price of the item before a promotion or sale.
     *
     * @var float|null
     */
    protected $compareAtUnitPrice;
    /**
     * The price of a single quantity of the item.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * The item's tax lines.
     *
     * @var list<StoreCartLineItemTaxLinesItem>|null
     */
    protected $taxLines;
    /**
     * The item's adjustments.
     *
     * @var list<StoreCartLineItemAdjustmentsItem>|null
     */
    protected $adjustments;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $cart;
    /**
     * The ID of the cart that the line item belongs to.
     *
     * @var string|null
     */
    protected $cartId;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the item was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the item was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the item was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The item's total including taxes, excluding promotions.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The item's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The total taxes of the item excluding promotions.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The item's total including taxes and promotions.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The item's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The total taxes of the item including promotions.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The item's total including taxes and promotions.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The item's total excluding taxes, including promotions.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The total taxes of the item including promotions.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The total discount of the item.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The total taxes applied on the discounted amount.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The item's ID.
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
     * The item's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The item's title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The item's subtitle.
     *
     * @return string|null
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }
    /**
     * The item's subtitle.
     *
     * @param string|null $subtitle
     *
     * @return self
     */
    public function setSubtitle(?string $subtitle): self
    {
        $this->initialized['subtitle'] = true;
        $this->subtitle = $subtitle;
        return $this;
    }
    /**
     * The item's thumbnail URL.
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    /**
     * The item's thumbnail URL.
     *
     * @param string|null $thumbnail
     *
     * @return self
     */
    public function setThumbnail(?string $thumbnail): self
    {
        $this->initialized['thumbnail'] = true;
        $this->thumbnail = $thumbnail;
        return $this;
    }
    /**
     * The item's quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The item's quantity.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The product's details.
     *
     * @return StoreProduct|null
     */
    public function getProduct(): ?StoreProduct
    {
        return $this->product;
    }
    /**
     * The product's details.
     *
     * @param StoreProduct|null $product
     *
     * @return self
     */
    public function setProduct(?StoreProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The ID of the associated product.
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * The ID of the associated product.
     *
     * @param string|null $productId
     *
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * The item's product title.
     *
     * @return string|null
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }
    /**
     * The item's product title.
     *
     * @param string|null $productTitle
     *
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->initialized['productTitle'] = true;
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * The item's product description.
     *
     * @return string|null
     */
    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }
    /**
     * The item's product description.
     *
     * @param string|null $productDescription
     *
     * @return self
     */
    public function setProductDescription(?string $productDescription): self
    {
        $this->initialized['productDescription'] = true;
        $this->productDescription = $productDescription;
        return $this;
    }
    /**
     * The item's product subtitle.
     *
     * @return string|null
     */
    public function getProductSubtitle(): ?string
    {
        return $this->productSubtitle;
    }
    /**
     * The item's product subtitle.
     *
     * @param string|null $productSubtitle
     *
     * @return self
     */
    public function setProductSubtitle(?string $productSubtitle): self
    {
        $this->initialized['productSubtitle'] = true;
        $this->productSubtitle = $productSubtitle;
        return $this;
    }
    /**
     * The ID of the associated product's type.
     *
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * The ID of the associated product's type.
     *
     * @param string|null $productType
     *
     * @return self
     */
    public function setProductType(?string $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
    /**
     * The ID of the associated product's collection.
     *
     * @return string|null
     */
    public function getProductCollection(): ?string
    {
        return $this->productCollection;
    }
    /**
     * The ID of the associated product's collection.
     *
     * @param string|null $productCollection
     *
     * @return self
     */
    public function setProductCollection(?string $productCollection): self
    {
        $this->initialized['productCollection'] = true;
        $this->productCollection = $productCollection;
        return $this;
    }
    /**
     * The item's product handle.
     *
     * @return string|null
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }
    /**
     * The item's product handle.
     *
     * @param string|null $productHandle
     *
     * @return self
     */
    public function setProductHandle(?string $productHandle): self
    {
        $this->initialized['productHandle'] = true;
        $this->productHandle = $productHandle;
        return $this;
    }
    /**
     * The variant's details.
     *
     * @return StoreProductVariant|null
     */
    public function getVariant(): ?StoreProductVariant
    {
        return $this->variant;
    }
    /**
     * The variant's details.
     *
     * @param StoreProductVariant|null $variant
     *
     * @return self
     */
    public function setVariant(?StoreProductVariant $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
    /**
     * The ID of the associated product variant.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The ID of the associated product variant.
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
     * The item's variant SKU.
     *
     * @return string|null
     */
    public function getVariantSku(): ?string
    {
        return $this->variantSku;
    }
    /**
     * The item's variant SKU.
     *
     * @param string|null $variantSku
     *
     * @return self
     */
    public function setVariantSku(?string $variantSku): self
    {
        $this->initialized['variantSku'] = true;
        $this->variantSku = $variantSku;
        return $this;
    }
    /**
     * The item's variant barcode.
     *
     * @return string|null
     */
    public function getVariantBarcode(): ?string
    {
        return $this->variantBarcode;
    }
    /**
     * The item's variant barcode.
     *
     * @param string|null $variantBarcode
     *
     * @return self
     */
    public function setVariantBarcode(?string $variantBarcode): self
    {
        $this->initialized['variantBarcode'] = true;
        $this->variantBarcode = $variantBarcode;
        return $this;
    }
    /**
     * The item's variant title.
     *
     * @return string|null
     */
    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }
    /**
     * The item's variant title.
     *
     * @param string|null $variantTitle
     *
     * @return self
     */
    public function setVariantTitle(?string $variantTitle): self
    {
        $this->initialized['variantTitle'] = true;
        $this->variantTitle = $variantTitle;
        return $this;
    }
    /**
     * The associated variant's value for the product's options.
     *
     * @return array<string, mixed>|null
     */
    public function getVariantOptionValues(): ?iterable
    {
        return $this->variantOptionValues;
    }
    /**
     * The associated variant's value for the product's options.
     *
     * @param array<string, mixed>|null $variantOptionValues
     *
     * @return self
     */
    public function setVariantOptionValues(?iterable $variantOptionValues): self
    {
        $this->initialized['variantOptionValues'] = true;
        $this->variantOptionValues = $variantOptionValues;
        return $this;
    }
    /**
     * Whether the item requires shipping.
     *
     * @return bool|null
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }
    /**
     * Whether the item requires shipping.
     *
     * @param bool|null $requiresShipping
     *
     * @return self
     */
    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->initialized['requiresShipping'] = true;
        $this->requiresShipping = $requiresShipping;
        return $this;
    }
    /**
     * Whether the item is discountable.
     *
     * @return bool|null
     */
    public function getIsDiscountable(): ?bool
    {
        return $this->isDiscountable;
    }
    /**
     * Whether the item is discountable.
     *
     * @param bool|null $isDiscountable
     *
     * @return self
     */
    public function setIsDiscountable(?bool $isDiscountable): self
    {
        $this->initialized['isDiscountable'] = true;
        $this->isDiscountable = $isDiscountable;
        return $this;
    }
    /**
     * Whether the item's price includes taxes.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * Whether the item's price includes taxes.
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
     * The original price of the item before a promotion or sale.
     *
     * @return float|null
     */
    public function getCompareAtUnitPrice(): ?float
    {
        return $this->compareAtUnitPrice;
    }
    /**
     * The original price of the item before a promotion or sale.
     *
     * @param float|null $compareAtUnitPrice
     *
     * @return self
     */
    public function setCompareAtUnitPrice(?float $compareAtUnitPrice): self
    {
        $this->initialized['compareAtUnitPrice'] = true;
        $this->compareAtUnitPrice = $compareAtUnitPrice;
        return $this;
    }
    /**
     * The price of a single quantity of the item.
     *
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }
    /**
     * The price of a single quantity of the item.
     *
     * @param float|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * The item's tax lines.
     *
     * @return list<StoreCartLineItemTaxLinesItem>|null
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }
    /**
     * The item's tax lines.
     *
     * @param list<StoreCartLineItemTaxLinesItem>|null $taxLines
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
     * The item's adjustments.
     *
     * @return list<StoreCartLineItemAdjustmentsItem>|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }
    /**
     * The item's adjustments.
     *
     * @param list<StoreCartLineItemAdjustmentsItem>|null $adjustments
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
     * @return array<string, mixed>|null
     */
    public function getCart(): ?iterable
    {
        return $this->cart;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $cart
     *
     * @return self
     */
    public function setCart(?iterable $cart): self
    {
        $this->initialized['cart'] = true;
        $this->cart = $cart;
        return $this;
    }
    /**
     * The ID of the cart that the line item belongs to.
     *
     * @return string|null
     */
    public function getCartId(): ?string
    {
        return $this->cartId;
    }
    /**
     * The ID of the cart that the line item belongs to.
     *
     * @param string|null $cartId
     *
     * @return self
     */
    public function setCartId(?string $cartId): self
    {
        $this->initialized['cartId'] = true;
        $this->cartId = $cartId;
        return $this;
    }
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The item's metadata, can hold custom key-value pairs.
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
     * The date the item was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the item was created.
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
     * The date the item was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the item was updated.
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
     * The date the item was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the item was deleted.
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
     * The item's total including taxes, excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The item's total including taxes, excluding promotions.
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
     * The item's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The item's total excluding taxes, including promotions.
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
     * The total taxes of the item excluding promotions.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The total taxes of the item excluding promotions.
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
     * The item's total including taxes and promotions.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The item's total including taxes and promotions.
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
     * The item's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The item's total excluding taxes, including promotions.
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
     * The total taxes of the item including promotions.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The total taxes of the item including promotions.
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
     * The item's total including taxes and promotions.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The item's total including taxes and promotions.
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
     * The item's total excluding taxes, including promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The item's total excluding taxes, including promotions.
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
     * The total taxes of the item including promotions.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The total taxes of the item including promotions.
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
     * The total discount of the item.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The total discount of the item.
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
     * The total taxes applied on the discounted amount.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The total taxes applied on the discounted amount.
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