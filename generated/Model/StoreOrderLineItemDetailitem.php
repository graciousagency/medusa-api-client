<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderLineItemDetailitem extends \ArrayObject
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
     * The item's variant.
     *
     * @var StoreOrderLineItemDetailitemVariant|null
     */
    protected $variant;
    /**
     * The item's product.
     *
     * @var StoreOrderLineItemDetailitemProduct|null
     */
    protected $product;
    /**
     * The item's tax lines.
     *
     * @var list<StoreOrderLineItemDetailitemTaxLinesItem>|null
     */
    protected $taxLines;
    /**
     * The item's adjustments.
     *
     * @var list<StoreOrderLineItemDetailitemAdjustmentsItem>|null
     */
    protected $adjustments;
    /**
     * 
     *
     * @var StoreOrderLineItemDetailitemDetail|null
     */
    protected $detail;
    /**
     * The item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The item's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The item's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The item's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The item's item total.
     *
     * @var float|null
     */
    protected $itemTotal;
    /**
     * The item's item subtotal.
     *
     * @var float|null
     */
    protected $itemSubtotal;
    /**
     * The item's item tax total.
     *
     * @var float|null
     */
    protected $itemTaxTotal;
    /**
     * The item's original total.
     *
     * @var float|null
     */
    protected $originalTotal;
    /**
     * The item's original subtotal.
     *
     * @var float|null
     */
    protected $originalSubtotal;
    /**
     * The item's original tax total.
     *
     * @var float|null
     */
    protected $originalTaxTotal;
    /**
     * The item's total.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The item's subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The item's tax total.
     *
     * @var float|null
     */
    protected $taxTotal;
    /**
     * The item's discount total.
     *
     * @var float|null
     */
    protected $discountTotal;
    /**
     * The item's discount tax total.
     *
     * @var float|null
     */
    protected $discountTaxTotal;
    /**
     * The item's subtitle.
     *
     * @var string|null
     */
    protected $subtitle;
    /**
     * The item's thumbnail.
     *
     * @var string|null
     */
    protected $thumbnail;
    /**
     * The item's variant id.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * The item's product id.
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
     * The item's product type.
     *
     * @var string|null
     */
    protected $productType;
    /**
     * The item's product collection.
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
     * The item's variant sku.
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
     * The item's variant option values.
     *
     * @var array<string, mixed>|null
     */
    protected $variantOptionValues;
    /**
     * The item's requires shipping.
     *
     * @var bool|null
     */
    protected $requiresShipping;
    /**
     * The item's is discountable.
     *
     * @var bool|null
     */
    protected $isDiscountable;
    /**
     * The item's is tax inclusive.
     *
     * @var bool|null
     */
    protected $isTaxInclusive;
    /**
     * The item's compare at unit price.
     *
     * @var float|null
     */
    protected $compareAtUnitPrice;
    /**
     * The item's unit price.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * The item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's refundable total.
     *
     * @var float|null
     */
    protected $refundableTotal;
    /**
     * The item's refundable total per unit.
     *
     * @var float|null
     */
    protected $refundableTotalPerUnit;
    /**
     * The item's variant.
     *
     * @return StoreOrderLineItemDetailitemVariant|null
     */
    public function getVariant(): ?StoreOrderLineItemDetailitemVariant
    {
        return $this->variant;
    }
    /**
     * The item's variant.
     *
     * @param StoreOrderLineItemDetailitemVariant|null $variant
     *
     * @return self
     */
    public function setVariant(?StoreOrderLineItemDetailitemVariant $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
    /**
     * The item's product.
     *
     * @return StoreOrderLineItemDetailitemProduct|null
     */
    public function getProduct(): ?StoreOrderLineItemDetailitemProduct
    {
        return $this->product;
    }
    /**
     * The item's product.
     *
     * @param StoreOrderLineItemDetailitemProduct|null $product
     *
     * @return self
     */
    public function setProduct(?StoreOrderLineItemDetailitemProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The item's tax lines.
     *
     * @return list<StoreOrderLineItemDetailitemTaxLinesItem>|null
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }
    /**
     * The item's tax lines.
     *
     * @param list<StoreOrderLineItemDetailitemTaxLinesItem>|null $taxLines
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
     * @return list<StoreOrderLineItemDetailitemAdjustmentsItem>|null
     */
    public function getAdjustments(): ?array
    {
        return $this->adjustments;
    }
    /**
     * The item's adjustments.
     *
     * @param list<StoreOrderLineItemDetailitemAdjustmentsItem>|null $adjustments
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
     * @return StoreOrderLineItemDetailitemDetail|null
     */
    public function getDetail(): ?StoreOrderLineItemDetailitemDetail
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param StoreOrderLineItemDetailitemDetail|null $detail
     *
     * @return self
     */
    public function setDetail(?StoreOrderLineItemDetailitemDetail $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
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
     * The item's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The item's metadata.
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
     * The item's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The item's created at.
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
     * The item's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The item's updated at.
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
     * The item's item total.
     *
     * @return float|null
     */
    public function getItemTotal(): ?float
    {
        return $this->itemTotal;
    }
    /**
     * The item's item total.
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
     * The item's item subtotal.
     *
     * @return float|null
     */
    public function getItemSubtotal(): ?float
    {
        return $this->itemSubtotal;
    }
    /**
     * The item's item subtotal.
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
     * The item's item tax total.
     *
     * @return float|null
     */
    public function getItemTaxTotal(): ?float
    {
        return $this->itemTaxTotal;
    }
    /**
     * The item's item tax total.
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
     * The item's original total.
     *
     * @return float|null
     */
    public function getOriginalTotal(): ?float
    {
        return $this->originalTotal;
    }
    /**
     * The item's original total.
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
     * The item's original subtotal.
     *
     * @return float|null
     */
    public function getOriginalSubtotal(): ?float
    {
        return $this->originalSubtotal;
    }
    /**
     * The item's original subtotal.
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
     * The item's original tax total.
     *
     * @return float|null
     */
    public function getOriginalTaxTotal(): ?float
    {
        return $this->originalTaxTotal;
    }
    /**
     * The item's original tax total.
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
     * The item's total.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The item's total.
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
     * The item's subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The item's subtotal.
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
     * The item's tax total.
     *
     * @return float|null
     */
    public function getTaxTotal(): ?float
    {
        return $this->taxTotal;
    }
    /**
     * The item's tax total.
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
     * The item's discount total.
     *
     * @return float|null
     */
    public function getDiscountTotal(): ?float
    {
        return $this->discountTotal;
    }
    /**
     * The item's discount total.
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
     * The item's discount tax total.
     *
     * @return float|null
     */
    public function getDiscountTaxTotal(): ?float
    {
        return $this->discountTaxTotal;
    }
    /**
     * The item's discount tax total.
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
     * The item's thumbnail.
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    /**
     * The item's thumbnail.
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
     * The item's variant id.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The item's variant id.
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
     * The item's product id.
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * The item's product id.
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
     * The item's product type.
     *
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * The item's product type.
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
     * The item's product collection.
     *
     * @return string|null
     */
    public function getProductCollection(): ?string
    {
        return $this->productCollection;
    }
    /**
     * The item's product collection.
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
     * The item's variant sku.
     *
     * @return string|null
     */
    public function getVariantSku(): ?string
    {
        return $this->variantSku;
    }
    /**
     * The item's variant sku.
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
     * The item's variant option values.
     *
     * @return array<string, mixed>|null
     */
    public function getVariantOptionValues(): ?iterable
    {
        return $this->variantOptionValues;
    }
    /**
     * The item's variant option values.
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
     * The item's requires shipping.
     *
     * @return bool|null
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }
    /**
     * The item's requires shipping.
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
     * The item's is discountable.
     *
     * @return bool|null
     */
    public function getIsDiscountable(): ?bool
    {
        return $this->isDiscountable;
    }
    /**
     * The item's is discountable.
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
     * The item's is tax inclusive.
     *
     * @return bool|null
     */
    public function getIsTaxInclusive(): ?bool
    {
        return $this->isTaxInclusive;
    }
    /**
     * The item's is tax inclusive.
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
     * The item's compare at unit price.
     *
     * @return float|null
     */
    public function getCompareAtUnitPrice(): ?float
    {
        return $this->compareAtUnitPrice;
    }
    /**
     * The item's compare at unit price.
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
     * The item's unit price.
     *
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }
    /**
     * The item's unit price.
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
     * The item's refundable total.
     *
     * @return float|null
     */
    public function getRefundableTotal(): ?float
    {
        return $this->refundableTotal;
    }
    /**
     * The item's refundable total.
     *
     * @param float|null $refundableTotal
     *
     * @return self
     */
    public function setRefundableTotal(?float $refundableTotal): self
    {
        $this->initialized['refundableTotal'] = true;
        $this->refundableTotal = $refundableTotal;
        return $this;
    }
    /**
     * The item's refundable total per unit.
     *
     * @return float|null
     */
    public function getRefundableTotalPerUnit(): ?float
    {
        return $this->refundableTotalPerUnit;
    }
    /**
     * The item's refundable total per unit.
     *
     * @param float|null $refundableTotalPerUnit
     *
     * @return self
     */
    public function setRefundableTotalPerUnit(?float $refundableTotalPerUnit): self
    {
        $this->initialized['refundableTotalPerUnit'] = true;
        $this->refundableTotalPerUnit = $refundableTotalPerUnit;
        return $this;
    }
}