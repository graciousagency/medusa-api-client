<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductOption extends \ArrayObject
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
     * The option's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The option's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $product;
    /**
     * The ID of the product this option belongs to.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * The option's values.
     *
     * @var list<StoreProductOptionValue>|null
     */
    protected $values;
    /**
     * The option's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the product option was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the product option was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the product option was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The option's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The option's ID.
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
     * The option's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The option's title.
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
     * The ID of the product this option belongs to.
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }
    /**
     * The ID of the product this option belongs to.
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
     * The option's values.
     *
     * @return list<StoreProductOptionValue>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * The option's values.
     *
     * @param list<StoreProductOptionValue>|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    /**
     * The option's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The option's metadata, can hold custom key-value pairs.
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
     * The date the product option was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the product option was created.
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
     * The date the product option was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the product option was updated.
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
     * The date the product option was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the product option was deleted.
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