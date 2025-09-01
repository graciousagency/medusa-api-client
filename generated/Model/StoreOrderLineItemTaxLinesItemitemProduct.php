<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderLineItemTaxLinesItemitemProduct extends \ArrayObject
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
     * The product's collection.
     *
     * @var array<string, mixed>|null
     */
    protected $collection;
    /**
     * The product's categories.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $categories;
    /**
     * The product's variants.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $variants;
    /**
     * The product's type.
     *
     * @var array<string, mixed>|null
     */
    protected $type;
    /**
     * The product's tags.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $tags;
    /**
     * The product's options.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $options;
    /**
     * The product's images.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $images;
    /**
     * The product's length.
     *
     * @var float|null
     */
    protected $length;
    /**
     * The product's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The product's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The product's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The product's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The product's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The product's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The product's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The product's subtitle.
     *
     * @var string|null
     */
    protected $subtitle;
    /**
     * The product's thumbnail.
     *
     * @var string|null
     */
    protected $thumbnail;
    /**
     * The product's handle.
     *
     * @var string|null
     */
    protected $handle;
    /**
     * The product's is giftcard.
     *
     * @var bool|null
     */
    protected $isGiftcard;
    /**
     * The product's width.
     *
     * @var float|null
     */
    protected $width;
    /**
     * The product's weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The product's height.
     *
     * @var float|null
     */
    protected $height;
    /**
     * The product's origin country.
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * The product's hs code.
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * The product's mid code.
     *
     * @var string|null
     */
    protected $midCode;
    /**
     * The product's material.
     *
     * @var string|null
     */
    protected $material;
    /**
     * The product's collection id.
     *
     * @var string|null
     */
    protected $collectionId;
    /**
     * The product's type id.
     *
     * @var string|null
     */
    protected $typeId;
    /**
     * The product's discountable.
     *
     * @var bool|null
     */
    protected $discountable;
    /**
     * The product's external id.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * The product's deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The product's collection.
     *
     * @return array<string, mixed>|null
     */
    public function getCollection(): ?iterable
    {
        return $this->collection;
    }
    /**
     * The product's collection.
     *
     * @param array<string, mixed>|null $collection
     *
     * @return self
     */
    public function setCollection(?iterable $collection): self
    {
        $this->initialized['collection'] = true;
        $this->collection = $collection;
        return $this;
    }
    /**
     * The product's categories.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     * The product's categories.
     *
     * @param list<array<string, mixed>>|null $categories
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
     * The product's variants.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getVariants(): ?array
    {
        return $this->variants;
    }
    /**
     * The product's variants.
     *
     * @param list<array<string, mixed>>|null $variants
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
     * The product's type.
     *
     * @return array<string, mixed>|null
     */
    public function getType(): ?iterable
    {
        return $this->type;
    }
    /**
     * The product's type.
     *
     * @param array<string, mixed>|null $type
     *
     * @return self
     */
    public function setType(?iterable $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The product's tags.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     * The product's tags.
     *
     * @param list<array<string, mixed>>|null $tags
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
     * @return list<array<string, mixed>>|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * The product's options.
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
     * The product's images.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }
    /**
     * The product's images.
     *
     * @param list<array<string, mixed>>|null $images
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
     * The product's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The product's ID.
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
     * The product's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The product's metadata.
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
     * The product's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The product's created at.
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
     * The product's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The product's updated at.
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
     * The product's thumbnail.
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    /**
     * The product's thumbnail.
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
     * The product's handle.
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     * The product's handle.
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
     * The product's is giftcard.
     *
     * @return bool|null
     */
    public function getIsGiftcard(): ?bool
    {
        return $this->isGiftcard;
    }
    /**
     * The product's is giftcard.
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
     * The product's hs code.
     *
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * The product's hs code.
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
     * The product's mid code.
     *
     * @return string|null
     */
    public function getMidCode(): ?string
    {
        return $this->midCode;
    }
    /**
     * The product's mid code.
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
     * The product's collection id.
     *
     * @return string|null
     */
    public function getCollectionId(): ?string
    {
        return $this->collectionId;
    }
    /**
     * The product's collection id.
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
     * The product's type id.
     *
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * The product's type id.
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
     * The product's discountable.
     *
     * @return bool|null
     */
    public function getDiscountable(): ?bool
    {
        return $this->discountable;
    }
    /**
     * The product's discountable.
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
     * The product's external id.
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * The product's external id.
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
    /**
     * The product's deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The product's deleted at.
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
}