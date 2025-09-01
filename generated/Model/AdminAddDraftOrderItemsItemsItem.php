<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminAddDraftOrderItemsItemsItem extends \ArrayObject
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
     * The item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The ID of the variant to add to the draft order.
     *
     * @var string|null
     */
    protected $variantId;
    /**
     * The item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The item's unit price.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * The original price of the item before a promotion or sale.
     *
     * @var float|null
     */
    protected $compareAtUnitPrice;
    /**
     * A note viewed only by admin users about the item.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * Whether the item can be purchased if it's out of stock.
     *
     * @var bool|null
     */
    protected $allowBackorder;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The item's quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The item's quantity.
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
     * The ID of the variant to add to the draft order.
     *
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
    /**
     * The ID of the variant to add to the draft order.
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
     * The item's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The item's title.
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
     * The original price of the item before a promotion or sale.
     *
     * @return float|null
     */
    public function getCompareAtUnitPrice(): ?float
    {
        return $this->compareAtUnitPrice;
    }
    /**
     * The original price of the item before a promotion or sale.
     *
     * @param float|null $compareAtUnitPrice
     *
     * @return self
     */
    public function setCompareAtUnitPrice(?float $compareAtUnitPrice): self
    {
        $this->initialized['compareAtUnitPrice'] = true;
        $this->compareAtUnitPrice = $compareAtUnitPrice;
        return $this;
    }
    /**
     * A note viewed only by admin users about the item.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note viewed only by admin users about the item.
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
     * Whether the item can be purchased if it's out of stock.
     *
     * @return bool|null
     */
    public function getAllowBackorder(): ?bool
    {
        return $this->allowBackorder;
    }
    /**
     * Whether the item can be purchased if it's out of stock.
     *
     * @param bool|null $allowBackorder
     *
     * @return self
     */
    public function setAllowBackorder(?bool $allowBackorder): self
    {
        $this->initialized['allowBackorder'] = true;
        $this->allowBackorder = $allowBackorder;
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