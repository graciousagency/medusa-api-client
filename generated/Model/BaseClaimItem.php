<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseClaimItem extends \ArrayObject
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
     * The claim item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the claim this item belongs to.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The ID of the order this item belongs to.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The ID of the item in the order.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The quantity claimed.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The claim's reason.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * The quantity claimed.
     *
     * @var BaseClaimItemRawQuantity|null
     */
    protected $rawQuantity;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the claim was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the claim was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The claim item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The claim item's ID.
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
     * The ID of the claim this item belongs to.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The ID of the claim this item belongs to.
     *
     * @param string|null $claimId
     *
     * @return self
     */
    public function setClaimId(?string $claimId): self
    {
        $this->initialized['claimId'] = true;
        $this->claimId = $claimId;
        return $this;
    }
    /**
     * The ID of the order this item belongs to.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this item belongs to.
     *
     * @param string|null $orderId
     *
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
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
     * The quantity claimed.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The quantity claimed.
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
     * The claim's reason.
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * The claim's reason.
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
     * The quantity claimed.
     *
     * @return BaseClaimItemRawQuantity|null
     */
    public function getRawQuantity(): ?BaseClaimItemRawQuantity
    {
        return $this->rawQuantity;
    }
    /**
     * The quantity claimed.
     *
     * @param BaseClaimItemRawQuantity|null $rawQuantity
     *
     * @return self
     */
    public function setRawQuantity(?BaseClaimItemRawQuantity $rawQuantity): self
    {
        $this->initialized['rawQuantity'] = true;
        $this->rawQuantity = $rawQuantity;
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
    /**
     * The date the claim was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the claim was created.
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
     * The date the claim was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the claim was updated.
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
}