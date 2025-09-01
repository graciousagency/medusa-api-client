<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreReturnItem extends \ArrayObject
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
     * The item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's received quantity.
     *
     * @var float|null
     */
    protected $receivedQuantity;
    /**
     * The item's damaged quantity.
     *
     * @var float|null
     */
    protected $damagedQuantity;
    /**
     * The ID of the item's reason.
     *
     * @var string|null
     */
    protected $reasonId;
    /**
     * A note with more details on why the item is returned.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The ID of the item in the order.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The ID of the return this item belongs to.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The item's received quantity.
     *
     * @return float|null
     */
    public function getReceivedQuantity(): ?float
    {
        return $this->receivedQuantity;
    }
    /**
     * The item's received quantity.
     *
     * @param float|null $receivedQuantity
     *
     * @return self
     */
    public function setReceivedQuantity(?float $receivedQuantity): self
    {
        $this->initialized['receivedQuantity'] = true;
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }
    /**
     * The item's damaged quantity.
     *
     * @return float|null
     */
    public function getDamagedQuantity(): ?float
    {
        return $this->damagedQuantity;
    }
    /**
     * The item's damaged quantity.
     *
     * @param float|null $damagedQuantity
     *
     * @return self
     */
    public function setDamagedQuantity(?float $damagedQuantity): self
    {
        $this->initialized['damagedQuantity'] = true;
        $this->damagedQuantity = $damagedQuantity;
        return $this;
    }
    /**
     * The ID of the item's reason.
     *
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * The ID of the item's reason.
     *
     * @param string|null $reasonId
     *
     * @return self
     */
    public function setReasonId(?string $reasonId): self
    {
        $this->initialized['reasonId'] = true;
        $this->reasonId = $reasonId;
        return $this;
    }
    /**
     * A note with more details on why the item is returned.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note with more details on why the item is returned.
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * The ID of the item in the order.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * The ID of the item in the order.
     *
     * @param string|null $itemId
     *
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * The ID of the return this item belongs to.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the return this item belongs to.
     *
     * @param string|null $returnId
     *
     * @return self
     */
    public function setReturnId(?string $returnId): self
    {
        $this->initialized['returnId'] = true;
        $this->returnId = $returnId;
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