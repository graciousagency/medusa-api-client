<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductsIdVariantsPostBody extends \ArrayObject
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
     * The variant's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The variant's SKU.
     *
     * @var string|null
     */
    protected $sku;
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
     * The variant's barcode.
     *
     * @var string|null
     */
    protected $barcode;
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
     * Whether it's allowed to order this variant when it's out of stock.
     *
     * @var bool|null
     */
    protected $allowBackorder;
    /**
     * Whether Medusa manages the variant's inventory quantity. If disabled, the product variant is always considered in stock.
     *
     * @var bool|null
     */
    protected $manageInventory;
    /**
     * The sorting order of the variant among other variants in the product.
     *
     * @var float|null
     */
    protected $variantRank;
    /**
     * The variant's weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The variant's length.
     *
     * @var float|null
     */
    protected $length;
    /**
     * The variant's height.
     *
     * @var float|null
     */
    protected $height;
    /**
     * The variant's width.
     *
     * @var float|null
     */
    protected $width;
    /**
     * The variant's origin country.
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * The variant's material.
     *
     * @var string|null
     */
    protected $material;
    /**
     * The variant's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The variant's prices.
     *
     * @var list<AdminCreateProductVariantPrice>|null
     */
    protected $prices;
    /**
     * The variant's options, where the key is an option's name, and the value is the option's value.
     *
     * @var array<string, mixed>|null
     */
    protected $options;
    /**
     * The variant's inventory items to create.
     *
     * @var list<AdminCreateProductVariantInventoryKit>|null
     */
    protected $inventoryItems;
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @var array<string, mixed>|null
     */
    protected $additionalData;
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
     * Whether it's allowed to order this variant when it's out of stock.
     *
     * @return bool|null
     */
    public function getAllowBackorder(): ?bool
    {
        return $this->allowBackorder;
    }
    /**
     * Whether it's allowed to order this variant when it's out of stock.
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
     * Whether Medusa manages the variant's inventory quantity. If disabled, the product variant is always considered in stock.
     *
     * @return bool|null
     */
    public function getManageInventory(): ?bool
    {
        return $this->manageInventory;
    }
    /**
     * Whether Medusa manages the variant's inventory quantity. If disabled, the product variant is always considered in stock.
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
     * The sorting order of the variant among other variants in the product.
     *
     * @return float|null
     */
    public function getVariantRank(): ?float
    {
        return $this->variantRank;
    }
    /**
     * The sorting order of the variant among other variants in the product.
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
     * The variant's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The variant's metadata, used to store custom key-value pairs.
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
     * The variant's prices.
     *
     * @return list<AdminCreateProductVariantPrice>|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     * The variant's prices.
     *
     * @param list<AdminCreateProductVariantPrice>|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * The variant's options, where the key is an option's name, and the value is the option's value.
     *
     * @return array<string, mixed>|null
     */
    public function getOptions(): ?iterable
    {
        return $this->options;
    }
    /**
     * The variant's options, where the key is an option's name, and the value is the option's value.
     *
     * @param array<string, mixed>|null $options
     *
     * @return self
     */
    public function setOptions(?iterable $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * The variant's inventory items to create.
     *
     * @return list<AdminCreateProductVariantInventoryKit>|null
     */
    public function getInventoryItems(): ?array
    {
        return $this->inventoryItems;
    }
    /**
     * The variant's inventory items to create.
     *
     * @param list<AdminCreateProductVariantInventoryKit>|null $inventoryItems
     *
     * @return self
     */
    public function setInventoryItems(?array $inventoryItems): self
    {
        $this->initialized['inventoryItems'] = true;
        $this->inventoryItems = $inventoryItems;
        return $this;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @return array<string, mixed>|null
     */
    public function getAdditionalData(): ?iterable
    {
        return $this->additionalData;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @param array<string, mixed>|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?iterable $additionalData): self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
}