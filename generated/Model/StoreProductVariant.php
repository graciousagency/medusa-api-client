<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductVariant extends \ArrayObject
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
     * The variant's options.
     *
     * @var list<StoreProductOptionValue>|null
     */
    protected $options;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $product;
    /**
     * The variant's length.
     *
     * @var float|null
     */
    protected $length;
    /**
     * The variant's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The variant's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The variant's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The variant's width.
     *
     * @var float|null
     */
    protected $width;
    /**
     * The variant's weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The variant's height.
     *
     * @var float|null
     */
    protected $height;
    /**
     * The variant's origin country.
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * The variant's HS code.
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * The variant's MID code.
     *
     * @var string|null
     */
    protected $midCode;
    /**
     * The variant's material.
     *
     * @var string|null
     */
    protected $material;
    /**
     * The date the variant was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the variant was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the variant was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The ID of the product this variant belongs to.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * The variant's SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * The variant's barcode.
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * The variant's EAN.
     *
     * @var string|null
     */
    protected $ean;
    /**
     * The variant's UPC.
     *
     * @var string|null
     */
    protected $upc;
    /**
     * Whether the variant can be ordered even if it's not in stock.
     *
     * @var bool|null
     */
    protected $allowBackorder;
    /**
     * Whether Medusa manages the variant's inventory. If disabled, the variant is always considered in stock.
     *
     * @var bool|null
     */
    protected $manageInventory;
    /**
     * The variant's inventory quantity. This property is only available if you pass `+variants.inventory_quantity` in the `fields` query parameter.
     *
     * @var float|null
     */
    protected $inventoryQuantity;
    /**
     * The variant's rank among its siblings.
     *
     * @var float|null
     */
    protected $variantRank;
    /**
     * The calculated price's details.
     *
     * @var BaseCalculatedPriceSet|null
     */
    protected $calculatedPrice;
    /**
     * The variant's options.
     *
     * @return list<StoreProductOptionValue>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * The variant's options.
     *
     * @param list<StoreProductOptionValue>|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getProduct(): ?iterable
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $product
     *
     * @return self
     */
    public function setProduct(?iterable $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The variant's length.
     *
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }
    /**
     * The variant's length.
     *
     * @param float|null $length
     *
     * @return self
     */
    public function setLength(?float $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * The variant's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The variant's title.
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
     * The variant's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The variant's metadata, can hold custom key-value pairs.
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
     * The variant's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The variant's ID.
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
     * The variant's width.
     *
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * The variant's width.
     *
     * @param float|null $width
     *
     * @return self
     */
    public function setWidth(?float $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The variant's weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * The variant's weight.
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * The variant's height.
     *
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * The variant's height.
     *
     * @param float|null $height
     *
     * @return self
     */
    public function setHeight(?float $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The variant's origin country.
     *
     * @return string|null
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }
    /**
     * The variant's origin country.
     *
     * @param string|null $originCountry
     *
     * @return self
     */
    public function setOriginCountry(?string $originCountry): self
    {
        $this->initialized['originCountry'] = true;
        $this->originCountry = $originCountry;
        return $this;
    }
    /**
     * The variant's HS code.
     *
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * The variant's HS code.
     *
     * @param string|null $hsCode
     *
     * @return self
     */
    public function setHsCode(?string $hsCode): self
    {
        $this->initialized['hsCode'] = true;
        $this->hsCode = $hsCode;
        return $this;
    }
    /**
     * The variant's MID code.
     *
     * @return string|null
     */
    public function getMidCode(): ?string
    {
        return $this->midCode;
    }
    /**
     * The variant's MID code.
     *
     * @param string|null $midCode
     *
     * @return self
     */
    public function setMidCode(?string $midCode): self
    {
        $this->initialized['midCode'] = true;
        $this->midCode = $midCode;
        return $this;
    }
    /**
     * The variant's material.
     *
     * @return string|null
     */
    public function getMaterial(): ?string
    {
        return $this->material;
    }
    /**
     * The variant's material.
     *
     * @param string|null $material
     *
     * @return self
     */
    public function setMaterial(?string $material): self
    {
        $this->initialized['material'] = true;
        $this->material = $material;
        return $this;
    }
    /**
     * The date the variant was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the variant was created.
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
     * The date the variant was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the variant was updated.
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
     * The date the variant was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the variant was deleted.
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
     * The ID of the product this variant belongs to.
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * The ID of the product this variant belongs to.
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
     * The variant's SKU.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * The variant's SKU.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * The variant's barcode.
     *
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }
    /**
     * The variant's barcode.
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * The variant's EAN.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }
    /**
     * The variant's EAN.
     *
     * @param string|null $ean
     *
     * @return self
     */
    public function setEan(?string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * The variant's UPC.
     *
     * @return string|null
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }
    /**
     * The variant's UPC.
     *
     * @param string|null $upc
     *
     * @return self
     */
    public function setUpc(?string $upc): self
    {
        $this->initialized['upc'] = true;
        $this->upc = $upc;
        return $this;
    }
    /**
     * Whether the variant can be ordered even if it's not in stock.
     *
     * @return bool|null
     */
    public function getAllowBackorder(): ?bool
    {
        return $this->allowBackorder;
    }
    /**
     * Whether the variant can be ordered even if it's not in stock.
     *
     * @param bool|null $allowBackorder
     *
     * @return self
     */
    public function setAllowBackorder(?bool $allowBackorder): self
    {
        $this->initialized['allowBackorder'] = true;
        $this->allowBackorder = $allowBackorder;
        return $this;
    }
    /**
     * Whether Medusa manages the variant's inventory. If disabled, the variant is always considered in stock.
     *
     * @return bool|null
     */
    public function getManageInventory(): ?bool
    {
        return $this->manageInventory;
    }
    /**
     * Whether Medusa manages the variant's inventory. If disabled, the variant is always considered in stock.
     *
     * @param bool|null $manageInventory
     *
     * @return self
     */
    public function setManageInventory(?bool $manageInventory): self
    {
        $this->initialized['manageInventory'] = true;
        $this->manageInventory = $manageInventory;
        return $this;
    }
    /**
     * The variant's inventory quantity. This property is only available if you pass `+variants.inventory_quantity` in the `fields` query parameter.
     *
     * @return float|null
     */
    public function getInventoryQuantity(): ?float
    {
        return $this->inventoryQuantity;
    }
    /**
     * The variant's inventory quantity. This property is only available if you pass `+variants.inventory_quantity` in the `fields` query parameter.
     *
     * @param float|null $inventoryQuantity
     *
     * @return self
     */
    public function setInventoryQuantity(?float $inventoryQuantity): self
    {
        $this->initialized['inventoryQuantity'] = true;
        $this->inventoryQuantity = $inventoryQuantity;
        return $this;
    }
    /**
     * The variant's rank among its siblings.
     *
     * @return float|null
     */
    public function getVariantRank(): ?float
    {
        return $this->variantRank;
    }
    /**
     * The variant's rank among its siblings.
     *
     * @param float|null $variantRank
     *
     * @return self
     */
    public function setVariantRank(?float $variantRank): self
    {
        $this->initialized['variantRank'] = true;
        $this->variantRank = $variantRank;
        return $this;
    }
    /**
     * The calculated price's details.
     *
     * @return BaseCalculatedPriceSet|null
     */
    public function getCalculatedPrice(): ?BaseCalculatedPriceSet
    {
        return $this->calculatedPrice;
    }
    /**
     * The calculated price's details.
     *
     * @param BaseCalculatedPriceSet|null $calculatedPrice
     *
     * @return self
     */
    public function setCalculatedPrice(?BaseCalculatedPriceSet $calculatedPrice): self
    {
        $this->initialized['calculatedPrice'] = true;
        $this->calculatedPrice = $calculatedPrice;
        return $this;
    }
}