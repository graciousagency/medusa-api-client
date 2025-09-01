<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateDraftOrderItem extends \ArrayObject
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
}