<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductOptionValue extends \ArrayObject
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
     * The value's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The product option's details.
     *
     * @var AdminProductOption|null
     */
    protected $option;
    /**
     * The ID of the option this value belongs to.
     *
     * @var string|null
     */
    protected $optionId;
    /**
     * The value's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the value was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the value was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the value was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The value's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The value's ID.
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
     * The value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The value.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The product option's details.
     *
     * @return AdminProductOption|null
     */
    public function getOption(): ?AdminProductOption
    {
        return $this->option;
    }
    /**
     * The product option's details.
     *
     * @param AdminProductOption|null $option
     *
     * @return self
     */
    public function setOption(?AdminProductOption $option): self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
    /**
     * The ID of the option this value belongs to.
     *
     * @return string|null
     */
    public function getOptionId(): ?string
    {
        return $this->optionId;
    }
    /**
     * The ID of the option this value belongs to.
     *
     * @param string|null $optionId
     *
     * @return self
     */
    public function setOptionId(?string $optionId): self
    {
        $this->initialized['optionId'] = true;
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * The value's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The value's metadata, can hold custom key-value pairs.
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
     * The date the value was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the value was created.
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
     * The date the value was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the value was updated.
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
     * The date the value was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the value was deleted.
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