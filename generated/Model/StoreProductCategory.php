<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductCategory extends \ArrayObject
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
     * The category's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The category's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The category's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The category's handle.
     *
     * @var string|null
     */
    protected $handle;
    /**
     * The category's rank.
     *
     * @var float|null
     */
    protected $rank;
    /**
     * The ID of the category's parent.
     *
     * @var string|null
     */
    protected $parentCategoryId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $parentCategory;
    /**
     * The category's children.
     *
     * @var list<array<string, mixed>>|null
     */
    protected $categoryChildren;
    /**
     * The category's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the category was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the category was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the category was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The category's products.
     *
     * @var list<StoreProduct>|null
     */
    protected $products;
    /**
     * The category's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The category's ID.
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
     * The category's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The category's name.
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
     * The category's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The category's description.
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
     * The category's handle.
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     * The category's handle.
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
     * The category's rank.
     *
     * @return float|null
     */
    public function getRank(): ?float
    {
        return $this->rank;
    }
    /**
     * The category's rank.
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
     * The ID of the category's parent.
     *
     * @return string|null
     */
    public function getParentCategoryId(): ?string
    {
        return $this->parentCategoryId;
    }
    /**
     * The ID of the category's parent.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getParentCategory(): ?iterable
    {
        return $this->parentCategory;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $parentCategory
     *
     * @return self
     */
    public function setParentCategory(?iterable $parentCategory): self
    {
        $this->initialized['parentCategory'] = true;
        $this->parentCategory = $parentCategory;
        return $this;
    }
    /**
     * The category's children.
     *
     * @return list<array<string, mixed>>|null
     */
    public function getCategoryChildren(): ?array
    {
        return $this->categoryChildren;
    }
    /**
     * The category's children.
     *
     * @param list<array<string, mixed>>|null $categoryChildren
     *
     * @return self
     */
    public function setCategoryChildren(?array $categoryChildren): self
    {
        $this->initialized['categoryChildren'] = true;
        $this->categoryChildren = $categoryChildren;
        return $this;
    }
    /**
     * The category's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The category's metadata, can hold custom key-value pairs.
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
     * The date the category was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the category was created.
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
     * The date the category was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the category was updated.
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
     * The date the category was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the category was deleted.
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
     * The category's products.
     *
     * @return list<StoreProduct>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
    /**
     * The category's products.
     *
     * @param list<StoreProduct>|null $products
     *
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}