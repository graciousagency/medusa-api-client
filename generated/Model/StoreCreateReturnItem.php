<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreCreateReturnItem extends \ArrayObject
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
     * The ID of the associated return reason.
     *
     * @var string|null
     */
    protected $reasonId;
    /**
     * A note with more details about the returned item.
     *
     * @var string|null
     */
    protected $note;
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
     * The ID of the associated return reason.
     *
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * The ID of the associated return reason.
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
     * A note with more details about the returned item.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * A note with more details about the returned item.
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
}