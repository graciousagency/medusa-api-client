<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillmentItem extends \ArrayObject
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
     * The item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The item's quantity to be fulfilled.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * The item's barcode.
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * The ID of the order's line item to be fulfilled.
     *
     * @var string|null
     */
    protected $lineItemId;
    /**
     * The ID of the inventory item of the underlying product variant.
     *
     * @var string|null
     */
    protected $inventoryItemId;
    /**
     * The ID of the fulfillment the item belongs to.
     *
     * @var string|null
     */
    protected $fulfillmentId;
    /**
     * The date the item was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the item was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the item was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The item's ID.
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
     * The item's quantity to be fulfilled.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The item's quantity to be fulfilled.
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
     * The item's SKU.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * The item's SKU.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * The item's barcode.
     *
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }
    /**
     * The item's barcode.
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * The ID of the order's line item to be fulfilled.
     *
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }
    /**
     * The ID of the order's line item to be fulfilled.
     *
     * @param string|null $lineItemId
     *
     * @return self
     */
    public function setLineItemId(?string $lineItemId): self
    {
        $this->initialized['lineItemId'] = true;
        $this->lineItemId = $lineItemId;
        return $this;
    }
    /**
     * The ID of the inventory item of the underlying product variant.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item of the underlying product variant.
     *
     * @param string|null $inventoryItemId
     *
     * @return self
     */
    public function setInventoryItemId(?string $inventoryItemId): self
    {
        $this->initialized['inventoryItemId'] = true;
        $this->inventoryItemId = $inventoryItemId;
        return $this;
    }
    /**
     * The ID of the fulfillment the item belongs to.
     *
     * @return string|null
     */
    public function getFulfillmentId(): ?string
    {
        return $this->fulfillmentId;
    }
    /**
     * The ID of the fulfillment the item belongs to.
     *
     * @param string|null $fulfillmentId
     *
     * @return self
     */
    public function setFulfillmentId(?string $fulfillmentId): self
    {
        $this->initialized['fulfillmentId'] = true;
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }
    /**
     * The date the item was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the item was created.
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
     * The date the item was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the item was updated.
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
     * The date the item was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the item was deleted.
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