<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderLineItemDetailitemVariant extends \ArrayObject
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
     * @var list<array<string, mixed>>|null
     */
    protected $options;
    /**
     * The variant's product.
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
     * The variant's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The variant's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The variant's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The variant's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The variant's product id.
     *
     * @var string|null
     */
    protected $productId;
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
     * The variant's hs code.
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * The variant's mid code.
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
     * The variant's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The variant's sku.
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
     * The variant's ean.
     *
     * @var string|null
     */
    protected $ean;
    /**
     * The variant's upc.
     *
     * @var string|null
     */
    protected $upc;
    /**
     * The variant's allow backorder.
     *
     * @var bool|null
     */
    protected $allowBackorder;
    /**
     * The variant's manage inventory.
     *
     * @var bool|null
     */
    protected $manageInventory;
    /**
     * The variant's inventory quantity.
     *
     * @var float|null
     */
    protected $inventoryQuantity;
    /**
     * The variant's variant rank.
     *
     * @var float|null
     */
    protected $variantRank;
    /**
     * The variant's calculated price.
     *
     * @var array<string, mixed>|null
     */
    protected $calculatedPrice;
    /**
     * The variant's options.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * The variant's options.
     *
     * @param list<array<string, mixed>>|null $options
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
     * The variant's product.
     *
     * @return array<string, mixed>|null
     */
    public function getProduct(): ?iterable
    {
        return $this->product;
    }
    /**
     * The variant's product.
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
     * The variant's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The variant's metadata.
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
     * The variant's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The variant's created at.
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
     * The variant's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The variant's updated at.
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
     * The variant's product id.
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * The variant's product id.
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
     * The variant's hs code.
     *
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * The variant's hs code.
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
     * The variant's mid code.
     *
     * @return string|null
     */
    public function getMidCode(): ?string
    {
        return $this->midCode;
    }
    /**
     * The variant's mid code.
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
     * The variant's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The variant's deleted at.
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
     * The variant's sku.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * The variant's sku.
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
     * The variant's ean.
     *
     * @return string|null
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }
    /**
     * The variant's ean.
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
     * The variant's upc.
     *
     * @return string|null
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }
    /**
     * The variant's upc.
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
     * The variant's allow backorder.
     *
     * @return bool|null
     */
    public function getAllowBackorder(): ?bool
    {
        return $this->allowBackorder;
    }
    /**
     * The variant's allow backorder.
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
     * The variant's manage inventory.
     *
     * @return bool|null
     */
    public function getManageInventory(): ?bool
    {
        return $this->manageInventory;
    }
    /**
     * The variant's manage inventory.
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
     * The variant's inventory quantity.
     *
     * @return float|null
     */
    public function getInventoryQuantity(): ?float
    {
        return $this->inventoryQuantity;
    }
    /**
     * The variant's inventory quantity.
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
     * The variant's variant rank.
     *
     * @return float|null
     */
    public function getVariantRank(): ?float
    {
        return $this->variantRank;
    }
    /**
     * The variant's variant rank.
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
     * The variant's calculated price.
     *
     * @return array<string, mixed>|null
     */
    public function getCalculatedPrice(): ?iterable
    {
        return $this->calculatedPrice;
    }
    /**
     * The variant's calculated price.
     *
     * @param array<string, mixed>|null $calculatedPrice
     *
     * @return self
     */
    public function setCalculatedPrice(?iterable $calculatedPrice): self
    {
        $this->initialized['calculatedPrice'] = true;
        $this->calculatedPrice = $calculatedPrice;
        return $this;
    }
}