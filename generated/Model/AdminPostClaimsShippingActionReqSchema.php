<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostClaimsShippingActionReqSchema extends \ArrayObject
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
     * The shipping method's custom amount.
     *
     * @var float|null
     */
    protected $customAmount;
    /**
     * A note only viewed by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The claim's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The shipping method's custom amount.
     *
     * @return float|null
     */
    public function getCustomAmount(): ?float
    {
        return $this->customAmount;
    }
    /**
     * The shipping method's custom amount.
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
     * A note only viewed by admin users.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note only viewed by admin users.
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
     * The claim's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The claim's metadata, can hold custom key-value pairs.
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