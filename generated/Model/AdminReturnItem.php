<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReturnItem extends \ArrayObject
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
     * The return item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The return item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The received quantity of the item. This quantity is added to the stocked inventory quantity of the item.
     *
     * @var float|null
     */
    protected $receivedQuantity;
    /**
     * The received damaged quantity of the item, which isn't added to the stocked inventory quantity of the item.
     *
     * @var float|null
     */
    protected $damagedQuantity;
    /**
     * The ID of the return reason associated with the item.
     *
     * @var string|null
     */
    protected $reasonId;
    /**
     * A note about why the item was returned.
     *
     * @var string|null
     */
    protected $note;
    /**
     * The ID of the associated order item.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The ID of the return this return item belongs to.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The return item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The return item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The return item's ID.
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
     * The return item's quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The return item's quantity.
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
     * The received quantity of the item. This quantity is added to the stocked inventory quantity of the item.
     *
     * @return float|null
     */
    public function getReceivedQuantity(): ?float
    {
        return $this->receivedQuantity;
    }
    /**
     * The received quantity of the item. This quantity is added to the stocked inventory quantity of the item.
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
     * The received damaged quantity of the item, which isn't added to the stocked inventory quantity of the item.
     *
     * @return float|null
     */
    public function getDamagedQuantity(): ?float
    {
        return $this->damagedQuantity;
    }
    /**
     * The received damaged quantity of the item, which isn't added to the stocked inventory quantity of the item.
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
     * The ID of the return reason associated with the item.
     *
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * The ID of the return reason associated with the item.
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
     * A note about why the item was returned.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note about why the item was returned.
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
     * The ID of the associated order item.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * The ID of the associated order item.
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
     * The ID of the return this return item belongs to.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the return this return item belongs to.
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
     * The return item's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The return item's metadata, can hold custom key-value pairs.
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