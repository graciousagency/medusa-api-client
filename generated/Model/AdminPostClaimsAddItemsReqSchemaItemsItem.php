<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostClaimsAddItemsReqSchemaItemsItem extends \ArrayObject
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
     * The ID of the associated product variant.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * The quantity to send to the customer.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's unit price.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * A note viewed only by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the associated product variant.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The ID of the associated product variant.
     *
     * @param string|null $variantId
     *
     * @return self
     */
    public function setVariantId(?string $variantId): self
    {
        $this->initialized['variantId'] = true;
        $this->variantId = $variantId;
        return $this;
    }
    /**
     * The quantity to send to the customer.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The quantity to send to the customer.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The item's unit price.
     *
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }
    /**
     * The item's unit price.
     *
     * @param float|null $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
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
     * The item's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The item's metadata, can hold custom key-value pairs.
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