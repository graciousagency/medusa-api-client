<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateProduct extends \ArrayObject
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
     * The product's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The product's subtitle.
     *
     * @var string|null
     */
    protected $subtitle;
    /**
     * The product's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Whether the product is a gift card.
     *
     * @var bool|null
     */
    protected $isGiftcard;
    /**
     * Whether discounts can be applied on the product.
     *
     * @var bool|null
     */
    protected $discountable;
    /**
     * The product's images.
     *
     * @var list<AdminUpdateProductImagesItem>|null
     */
    protected $images;
    /**
     * The product's thumbnail URL.
     *
     * @var string|null
     */
    protected $thumbnail;
    /**
     * The product's unique handle.
     *
     * @var string|null
     */
    protected $handle;
    /**
     * The product's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The ID of the product's type.
     *
     * @var string|null
     */
    protected $typeId;
    /**
     * The ID of the product's collection.
     *
     * @var string|null
     */
    protected $collectionId;
    /**
     * The product's categories.
     *
     * @var list<AdminUpdateProductCategoriesItem>|null
     */
    protected $categories;
    /**
     * The product's tags.
     *
     * @var list<AdminUpdateProductTagsItem>|null
     */
    protected $tags;
    /**
     * The product's options.
     *
     * @var list<AdminUpdateProductOption>|null
     */
    protected $options;
    /**
     * The product's variants. You can add new variants or update existing ones, passing their IDs in the object.
     *
     * @var list<mixed>|null
     */
    protected $variants;
    /**
     * The sales channels that the product is available in.
     *
     * @var list<AdminUpdateProductSalesChannelsItem>|null
     */
    protected $salesChannels;
    /**
     * The product's weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The product's length.
     *
     * @var float|null
     */
    protected $length;
    /**
     * The product's height.
     *
     * @var float|null
     */
    protected $height;
    /**
     * The product's width.
     *
     * @var float|null
     */
    protected $width;
    /**
     * The product's HS code.
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * The product's MID code.
     *
     * @var string|null
     */
    protected $midCode;
    /**
     * The product's origin country.
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * The product's material.
     *
     * @var string|null
     */
    protected $material;
    /**
     * The product's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the product in an external or third-party system.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * The product's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The product's title.
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
     * The product's subtitle.
     *
     * @return string|null
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }
    /**
     * The product's subtitle.
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
     * The product's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The product's description.
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
     * Whether the product is a gift card.
     *
     * @return bool|null
     */
    public function getIsGiftcard(): ?bool
    {
        return $this->isGiftcard;
    }
    /**
     * Whether the product is a gift card.
     *
     * @param bool|null $isGiftcard
     *
     * @return self
     */
    public function setIsGiftcard(?bool $isGiftcard): self
    {
        $this->initialized['isGiftcard'] = true;
        $this->isGiftcard = $isGiftcard;
        return $this;
    }
    /**
     * Whether discounts can be applied on the product.
     *
     * @return bool|null
     */
    public function getDiscountable(): ?bool
    {
        return $this->discountable;
    }
    /**
     * Whether discounts can be applied on the product.
     *
     * @param bool|null $discountable
     *
     * @return self
     */
    public function setDiscountable(?bool $discountable): self
    {
        $this->initialized['discountable'] = true;
        $this->discountable = $discountable;
        return $this;
    }
    /**
     * The product's images.
     *
     * @return list<AdminUpdateProductImagesItem>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }
    /**
     * The product's images.
     *
     * @param list<AdminUpdateProductImagesItem>|null $images
     *
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * The product's thumbnail URL.
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    /**
     * The product's thumbnail URL.
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
     * The product's unique handle.
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     * The product's unique handle.
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle): self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
        return $this;
    }
    /**
     * The product's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The product's status.
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
     * The ID of the product's type.
     *
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * The ID of the product's type.
     *
     * @param string|null $typeId
     *
     * @return self
     */
    public function setTypeId(?string $typeId): self
    {
        $this->initialized['typeId'] = true;
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * The ID of the product's collection.
     *
     * @return string|null
     */
    public function getCollectionId(): ?string
    {
        return $this->collectionId;
    }
    /**
     * The ID of the product's collection.
     *
     * @param string|null $collectionId
     *
     * @return self
     */
    public function setCollectionId(?string $collectionId): self
    {
        $this->initialized['collectionId'] = true;
        $this->collectionId = $collectionId;
        return $this;
    }
    /**
     * The product's categories.
     *
     * @return list<AdminUpdateProductCategoriesItem>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     * The product's categories.
     *
     * @param list<AdminUpdateProductCategoriesItem>|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * The product's tags.
     *
     * @return list<AdminUpdateProductTagsItem>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * The product's tags.
     *
     * @param list<AdminUpdateProductTagsItem>|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * The product's options.
     *
     * @return list<AdminUpdateProductOption>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * The product's options.
     *
     * @param list<AdminUpdateProductOption>|null $options
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
     * The product's variants. You can add new variants or update existing ones, passing their IDs in the object.
     *
     * @return list<mixed>|null
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }
    /**
     * The product's variants. You can add new variants or update existing ones, passing their IDs in the object.
     *
     * @param list<mixed>|null $variants
     *
     * @return self
     */
    public function setVariants(?array $variants): self
    {
        $this->initialized['variants'] = true;
        $this->variants = $variants;
        return $this;
    }
    /**
     * The sales channels that the product is available in.
     *
     * @return list<AdminUpdateProductSalesChannelsItem>|null
     */
    public function getSalesChannels(): ?array
    {
        return $this->salesChannels;
    }
    /**
     * The sales channels that the product is available in.
     *
     * @param list<AdminUpdateProductSalesChannelsItem>|null $salesChannels
     *
     * @return self
     */
    public function setSalesChannels(?array $salesChannels): self
    {
        $this->initialized['salesChannels'] = true;
        $this->salesChannels = $salesChannels;
        return $this;
    }
    /**
     * The product's weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * The product's weight.
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
     * The product's length.
     *
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }
    /**
     * The product's length.
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
     * The product's height.
     *
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * The product's height.
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
     * The product's width.
     *
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * The product's width.
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
     * The product's HS code.
     *
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * The product's HS code.
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
     * The product's MID code.
     *
     * @return string|null
     */
    public function getMidCode(): ?string
    {
        return $this->midCode;
    }
    /**
     * The product's MID code.
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
     * The product's origin country.
     *
     * @return string|null
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }
    /**
     * The product's origin country.
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
     * The product's material.
     *
     * @return string|null
     */
    public function getMaterial(): ?string
    {
        return $this->material;
    }
    /**
     * The product's material.
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
     * The product's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The product's metadata, can hold custom key-value pairs.
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
     * The ID of the product in an external or third-party system.
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * The ID of the product in an external or third-party system.
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
}