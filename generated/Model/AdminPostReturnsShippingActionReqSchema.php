<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostReturnsShippingActionReqSchema extends \ArrayObject
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
     * Set a custom price for the shipping method.
     *
     * @var float|null
     */
    protected $customAmount;
    /**
     * A note viewed only by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The return's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * Set a custom price for the shipping method.
     *
     * @return float|null
     */
    public function getCustomAmount(): ?float
    {
        return $this->customAmount;
    }
    /**
     * Set a custom price for the shipping method.
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
     * A note viewed only by admin users.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note viewed only by admin users.
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
     * The return's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The return's metadata, can hold custom key-value pairs.
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