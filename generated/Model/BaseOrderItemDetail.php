<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderItemDetail extends \ArrayObject
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
     * the detail's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * the ID of the associated line item.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $item;
    /**
     * The item's quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * The item's fulfilled quantity.
     *
     * @var float|null
     */
    protected $fulfilledQuantity;
    /**
     * The item's delivered quantity.
     *
     * @var float|null
     */
    protected $deliveredQuantity;
    /**
     * The item's shipped quantity.
     *
     * @var float|null
     */
    protected $shippedQuantity;
    /**
     * The item's quantity that's requested to be returned.
     *
     * @var float|null
     */
    protected $returnRequestedQuantity;
    /**
     * The item's quantity that's returned and added to the underlying variant's stocked quantity.
     *
     * @var float|null
     */
    protected $returnReceivedQuantity;
    /**
     * The item's quantity that's returned but damaged. So, it's not added to the underlying variant's stocked quantity.
     *
     * @var float|null
     */
    protected $returnDismissedQuantity;
    /**
     * The item's quantity that's removed from the order.
     *
     * @var float|null
     */
    protected $writtenOffQuantity;
    /**
     * The item's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the detail was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the detail was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * the detail's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * the detail's ID.
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
     * the ID of the associated line item.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * the ID of the associated line item.
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
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getItem(): ?iterable
    {
        return $this->item;
    }
    /**
     * 
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
     * The item's fulfilled quantity.
     *
     * @return float|null
     */
    public function getFulfilledQuantity(): ?float
    {
        return $this->fulfilledQuantity;
    }
    /**
     * The item's fulfilled quantity.
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
     * The item's delivered quantity.
     *
     * @return float|null
     */
    public function getDeliveredQuantity(): ?float
    {
        return $this->deliveredQuantity;
    }
    /**
     * The item's delivered quantity.
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
     * The item's shipped quantity.
     *
     * @return float|null
     */
    public function getShippedQuantity(): ?float
    {
        return $this->shippedQuantity;
    }
    /**
     * The item's shipped quantity.
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
     * The item's quantity that's requested to be returned.
     *
     * @return float|null
     */
    public function getReturnRequestedQuantity(): ?float
    {
        return $this->returnRequestedQuantity;
    }
    /**
     * The item's quantity that's requested to be returned.
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
     * The item's quantity that's returned and added to the underlying variant's stocked quantity.
     *
     * @return float|null
     */
    public function getReturnReceivedQuantity(): ?float
    {
        return $this->returnReceivedQuantity;
    }
    /**
     * The item's quantity that's returned and added to the underlying variant's stocked quantity.
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
     * The item's quantity that's returned but damaged. So, it's not added to the underlying variant's stocked quantity.
     *
     * @return float|null
     */
    public function getReturnDismissedQuantity(): ?float
    {
        return $this->returnDismissedQuantity;
    }
    /**
     * The item's quantity that's returned but damaged. So, it's not added to the underlying variant's stocked quantity.
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
     * The item's quantity that's removed from the order.
     *
     * @return float|null
     */
    public function getWrittenOffQuantity(): ?float
    {
        return $this->writtenOffQuantity;
    }
    /**
     * The item's quantity that's removed from the order.
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
     * The date the detail was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the detail was created.
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
     * The date the detail was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the detail was updated.
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