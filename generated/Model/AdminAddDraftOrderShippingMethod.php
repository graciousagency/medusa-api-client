<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminAddDraftOrderShippingMethod extends \ArrayObject
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
     * The ID of the shipping option that this method is created from.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * A custom amount to be charged for this shipping method. If not provided, the shipping option's amount will be used.
     *
     * @var float|null
     */
    protected $customAmount;
    /**
     * The shipping method's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * A note viewed only by admin users about the shipping method.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the shipping option that this method is created from.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the shipping option that this method is created from.
     *
     * @param string|null $shippingOptionId
     *
     * @return self
     */
    public function setShippingOptionId(?string $shippingOptionId): self
    {
        $this->initialized['shippingOptionId'] = true;
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }
    /**
     * A custom amount to be charged for this shipping method. If not provided, the shipping option's amount will be used.
     *
     * @return float|null
     */
    public function getCustomAmount(): ?float
    {
        return $this->customAmount;
    }
    /**
     * A custom amount to be charged for this shipping method. If not provided, the shipping option's amount will be used.
     *
     * @param float|null $customAmount
     *
     * @return self
     */
    public function setCustomAmount(?float $customAmount): self
    {
        $this->initialized['customAmount'] = true;
        $this->customAmount = $customAmount;
        return $this;
    }
    /**
     * The shipping method's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The shipping method's description.
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
     * A note viewed only by admin users about the shipping method.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note viewed only by admin users about the shipping method.
     *
     * @param string|null $internalNote
     *
     * @return self
     */
    public function setInternalNote(?string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipping method's metadata, can hold custom key-value pairs.
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