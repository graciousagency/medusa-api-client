<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateFulfillmentItemsItem extends \ArrayObject
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
     * The item's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The item's SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * The quantity to fulfill of the item.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's barcode.
     *
     * @var string|null
     */
    protected $barcode;
    /**
     * The ID of the associated line item.
     *
     * @var string|null
     */
    protected $lineItemId;
    /**
     * The ID of the inventory item associated with the underlying variant.
     *
     * @var string|null
     */
    protected $inventoryItemId;
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
     * The quantity to fulfill of the item.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The quantity to fulfill of the item.
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
     * The ID of the associated line item.
     *
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }
    /**
     * The ID of the associated line item.
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
     * The ID of the inventory item associated with the underlying variant.
     *
     * @return string|null
     */
    public function getInventoryItemId(): ?string
    {
        return $this->inventoryItemId;
    }
    /**
     * The ID of the inventory item associated with the underlying variant.
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
}