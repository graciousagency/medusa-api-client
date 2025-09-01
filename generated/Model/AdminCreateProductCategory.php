<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateProductCategory extends \ArrayObject
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
     * The product category's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The product category's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The product category's handle.
     *
     * @var string|null
     */
    protected $handle;
    /**
     * Whether the product category is only used and seen by admin users.
     *
     * @var bool|null
     */
    protected $isInternal;
    /**
     * Whether the product category is active.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * The ID of a category that's the parent of this one.
     *
     * @var string|null
     */
    protected $parentCategoryId;
    /**
     * The sorting order of the product category among sibling categories.
     *
     * @var float|null
     */
    protected $rank;
    /**
     * The product category's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The product category's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The product category's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The product category's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The product category's description.
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
     * The product category's handle.
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     * The product category's handle.
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
     * Whether the product category is only used and seen by admin users.
     *
     * @return bool|null
     */
    public function getIsInternal(): ?bool
    {
        return $this->isInternal;
    }
    /**
     * Whether the product category is only used and seen by admin users.
     *
     * @param bool|null $isInternal
     *
     * @return self
     */
    public function setIsInternal(?bool $isInternal): self
    {
        $this->initialized['isInternal'] = true;
        $this->isInternal = $isInternal;
        return $this;
    }
    /**
     * Whether the product category is active.
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether the product category is active.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * The ID of a category that's the parent of this one.
     *
     * @return string|null
     */
    public function getParentCategoryId(): ?string
    {
        return $this->parentCategoryId;
    }
    /**
     * The ID of a category that's the parent of this one.
     *
     * @param string|null $parentCategoryId
     *
     * @return self
     */
    public function setParentCategoryId(?string $parentCategoryId): self
    {
        $this->initialized['parentCategoryId'] = true;
        $this->parentCategoryId = $parentCategoryId;
        return $this;
    }
    /**
     * The sorting order of the product category among sibling categories.
     *
     * @return float|null
     */
    public function getRank(): ?float
    {
        return $this->rank;
    }
    /**
     * The sorting order of the product category among sibling categories.
     *
     * @param float|null $rank
     *
     * @return self
     */
    public function setRank(?float $rank): self
    {
        $this->initialized['rank'] = true;
        $this->rank = $rank;
        return $this;
    }
    /**
     * The product category's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The product category's metadata, used to store custom key-value pairs.
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
}