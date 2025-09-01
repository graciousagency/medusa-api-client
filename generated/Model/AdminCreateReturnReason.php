<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateReturnReason extends \ArrayObject
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
     * The return reason's value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The return reason's label.
     *
     * @var string|null
     */
    protected $label;
    /**
     * The return reason's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The ID of the parent return reason.
     *
     * @var string|null
     */
    protected $parentReturnReasonId;
    /**
     * The return reason's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The return reason's value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The return reason's value.
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
     * The return reason's label.
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * The return reason's label.
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The return reason's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The return reason's description.
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
     * The ID of the parent return reason.
     *
     * @return string|null
     */
    public function getParentReturnReasonId(): ?string
    {
        return $this->parentReturnReasonId;
    }
    /**
     * The ID of the parent return reason.
     *
     * @param string|null $parentReturnReasonId
     *
     * @return self
     */
    public function setParentReturnReasonId(?string $parentReturnReasonId): self
    {
        $this->initialized['parentReturnReasonId'] = true;
        $this->parentReturnReasonId = $parentReturnReasonId;
        return $this;
    }
    /**
     * The return reason's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The return reason's metadata, can hold custom key-value pairs.
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