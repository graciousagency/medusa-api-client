<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInventoryItem extends \ArrayObject
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
     * The inventory item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The inventory item's sku.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * The inventory item's origin country.
     *
     * @var string|null
     */
    protected $originCountry;
    /**
     * The inventory item's HS code.
     *
     * @var string|null
     */
    protected $hsCode;
    /**
     * Whether the inventory item requires shipping.
     *
     * @var bool|null
     */
    protected $requiresShipping;
    /**
     * The inventory item's MID code.
     *
     * @var string|null
     */
    protected $midCode;
    /**
     * The inventory item's material.
     *
     * @var string|null
     */
    protected $material;
    /**
     * The inventory item's weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * The inventory item's length.
     *
     * @var float|null
     */
    protected $length;
    /**
     * The inventory item's height.
     *
     * @var float|null
     */
    protected $height;
    /**
     * The inventory item's width.
     *
     * @var float|null
     */
    protected $width;
    /**
     * The inventory item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The inventory item's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The thumbnail URL of the inventory item.
     *
     * @var string|null
     */
    protected $thumbnail;
    /**
     * Custom key-value pairs, used to store additional information about the inventory item.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The inventory item's location levels.
     *
     * @var list<AdminInventoryLevel>|null
     */
    protected $locationLevels;
    /**
     * The inventory item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The inventory item's ID.
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
     * The inventory item's sku.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * The inventory item's sku.
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
     * The inventory item's origin country.
     *
     * @return string|null
     */
    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }
    /**
     * The inventory item's origin country.
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
     * The inventory item's HS code.
     *
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }
    /**
     * The inventory item's HS code.
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
     * Whether the inventory item requires shipping.
     *
     * @return bool|null
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }
    /**
     * Whether the inventory item requires shipping.
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
     * The inventory item's MID code.
     *
     * @return string|null
     */
    public function getMidCode(): ?string
    {
        return $this->midCode;
    }
    /**
     * The inventory item's MID code.
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
     * The inventory item's material.
     *
     * @return string|null
     */
    public function getMaterial(): ?string
    {
        return $this->material;
    }
    /**
     * The inventory item's material.
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
     * The inventory item's weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * The inventory item's weight.
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
     * The inventory item's length.
     *
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }
    /**
     * The inventory item's length.
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
     * The inventory item's height.
     *
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }
    /**
     * The inventory item's height.
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
     * The inventory item's width.
     *
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }
    /**
     * The inventory item's width.
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
     * The inventory item's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The inventory item's title.
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
     * The inventory item's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The inventory item's description.
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
     * The thumbnail URL of the inventory item.
     *
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    /**
     * The thumbnail URL of the inventory item.
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
     * Custom key-value pairs, used to store additional information about the inventory item.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * Custom key-value pairs, used to store additional information about the inventory item.
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
     * The inventory item's location levels.
     *
     * @return list<AdminInventoryLevel>|null
     */
    public function getLocationLevels(): ?array
    {
        return $this->locationLevels;
    }
    /**
     * The inventory item's location levels.
     *
     * @param list<AdminInventoryLevel>|null $locationLevels
     *
     * @return self
     */
    public function setLocationLevels(?array $locationLevels): self
    {
        $this->initialized['locationLevels'] = true;
        $this->locationLevels = $locationLevels;
        return $this;
    }
}