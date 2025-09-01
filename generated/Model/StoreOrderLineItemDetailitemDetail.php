<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderLineItemDetailitemDetail extends \ArrayObject
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
     * The detail's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The detail's item id.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The detail's item.
     *
     * @var array<string, mixed>|null
     */
    protected $item;
    /**
     * The detail's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The detail's fulfilled quantity.
     *
     * @var float|null
     */
    protected $fulfilledQuantity;
    /**
     * The detail's delivered quantity.
     *
     * @var float|null
     */
    protected $deliveredQuantity;
    /**
     * The detail's shipped quantity.
     *
     * @var float|null
     */
    protected $shippedQuantity;
    /**
     * The detail's return requested quantity.
     *
     * @var float|null
     */
    protected $returnRequestedQuantity;
    /**
     * The detail's return received quantity.
     *
     * @var float|null
     */
    protected $returnReceivedQuantity;
    /**
     * The detail's return dismissed quantity.
     *
     * @var float|null
     */
    protected $returnDismissedQuantity;
    /**
     * The detail's written off quantity.
     *
     * @var float|null
     */
    protected $writtenOffQuantity;
    /**
     * The detail's metadata.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The detail's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The detail's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The detail's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The detail's ID.
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
     * The detail's item id.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * The detail's item id.
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
     * The detail's item.
     *
     * @return array<string, mixed>|null
     */
    public function getItem(): ?iterable
    {
        return $this->item;
    }
    /**
     * The detail's item.
     *
     * @param array<string, mixed>|null $item
     *
     * @return self
     */
    public function setItem(?iterable $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * The detail's quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * The detail's quantity.
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
     * The detail's fulfilled quantity.
     *
     * @return float|null
     */
    public function getFulfilledQuantity(): ?float
    {
        return $this->fulfilledQuantity;
    }
    /**
     * The detail's fulfilled quantity.
     *
     * @param float|null $fulfilledQuantity
     *
     * @return self
     */
    public function setFulfilledQuantity(?float $fulfilledQuantity): self
    {
        $this->initialized['fulfilledQuantity'] = true;
        $this->fulfilledQuantity = $fulfilledQuantity;
        return $this;
    }
    /**
     * The detail's delivered quantity.
     *
     * @return float|null
     */
    public function getDeliveredQuantity(): ?float
    {
        return $this->deliveredQuantity;
    }
    /**
     * The detail's delivered quantity.
     *
     * @param float|null $deliveredQuantity
     *
     * @return self
     */
    public function setDeliveredQuantity(?float $deliveredQuantity): self
    {
        $this->initialized['deliveredQuantity'] = true;
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }
    /**
     * The detail's shipped quantity.
     *
     * @return float|null
     */
    public function getShippedQuantity(): ?float
    {
        return $this->shippedQuantity;
    }
    /**
     * The detail's shipped quantity.
     *
     * @param float|null $shippedQuantity
     *
     * @return self
     */
    public function setShippedQuantity(?float $shippedQuantity): self
    {
        $this->initialized['shippedQuantity'] = true;
        $this->shippedQuantity = $shippedQuantity;
        return $this;
    }
    /**
     * The detail's return requested quantity.
     *
     * @return float|null
     */
    public function getReturnRequestedQuantity(): ?float
    {
        return $this->returnRequestedQuantity;
    }
    /**
     * The detail's return requested quantity.
     *
     * @param float|null $returnRequestedQuantity
     *
     * @return self
     */
    public function setReturnRequestedQuantity(?float $returnRequestedQuantity): self
    {
        $this->initialized['returnRequestedQuantity'] = true;
        $this->returnRequestedQuantity = $returnRequestedQuantity;
        return $this;
    }
    /**
     * The detail's return received quantity.
     *
     * @return float|null
     */
    public function getReturnReceivedQuantity(): ?float
    {
        return $this->returnReceivedQuantity;
    }
    /**
     * The detail's return received quantity.
     *
     * @param float|null $returnReceivedQuantity
     *
     * @return self
     */
    public function setReturnReceivedQuantity(?float $returnReceivedQuantity): self
    {
        $this->initialized['returnReceivedQuantity'] = true;
        $this->returnReceivedQuantity = $returnReceivedQuantity;
        return $this;
    }
    /**
     * The detail's return dismissed quantity.
     *
     * @return float|null
     */
    public function getReturnDismissedQuantity(): ?float
    {
        return $this->returnDismissedQuantity;
    }
    /**
     * The detail's return dismissed quantity.
     *
     * @param float|null $returnDismissedQuantity
     *
     * @return self
     */
    public function setReturnDismissedQuantity(?float $returnDismissedQuantity): self
    {
        $this->initialized['returnDismissedQuantity'] = true;
        $this->returnDismissedQuantity = $returnDismissedQuantity;
        return $this;
    }
    /**
     * The detail's written off quantity.
     *
     * @return float|null
     */
    public function getWrittenOffQuantity(): ?float
    {
        return $this->writtenOffQuantity;
    }
    /**
     * The detail's written off quantity.
     *
     * @param float|null $writtenOffQuantity
     *
     * @return self
     */
    public function setWrittenOffQuantity(?float $writtenOffQuantity): self
    {
        $this->initialized['writtenOffQuantity'] = true;
        $this->writtenOffQuantity = $writtenOffQuantity;
        return $this;
    }
    /**
     * The detail's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The detail's metadata.
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
     * The detail's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The detail's created at.
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
     * The detail's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The detail's updated at.
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