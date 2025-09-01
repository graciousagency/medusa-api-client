<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPostClaimItemsReqSchemaItemsItem extends \ArrayObject
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
     * The ID of the order's item.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The quantity of the order's item to add to the claim.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The reason the item is claimed.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * The item's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * A note that's only viewed by admin users.
     *
     * @var string|null
     */
    protected $internalNote;
    /**
     * The ID of the order's item.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The ID of the order's item.
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
     * The quantity of the order's item to add to the claim.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The quantity of the order's item to add to the claim.
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
     * The reason the item is claimed.
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * The reason the item is claimed.
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * The item's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The item's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * A note that's only viewed by admin users.
     *
     * @return string|null
     */
    public function getInternalNote(): ?string
    {
        return $this->internalNote;
    }
    /**
     * A note that's only viewed by admin users.
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