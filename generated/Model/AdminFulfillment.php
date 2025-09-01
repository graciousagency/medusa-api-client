<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminFulfillment extends \ArrayObject
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
     * The fulfillment's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the location the fulfillment's items are shipped from.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The ID of the fulfillment provider handling this fulfillment.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The ID of the shipping option this fulfillment is created for.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The fulfillment provider's details.
     *
     * @var AdminFulfillmentProvider|null
     */
    protected $provider;
    /**
     * An address's details.
     *
     * @var AdminFulfillmentAddress|null
     */
    protected $deliveryAddress;
    /**
     * The fulfillment's items.
     *
     * @var list<AdminFulfillmentItem>|null
     */
    protected $items;
    /**
     * The fulfillment's shipment labels.
     *
     * @var list<AdminFulfillmentLabel>|null
     */
    protected $labels;
    /**
     * The date the fulfillment was packed at.
     *
     * @var string|null
     */
    protected $packedAt;
    /**
     * The date the fulfillment was shipped at.
     *
     * @var string|null
     */
    protected $shippedAt;
    /**
     * The date the fulfillment was delivered at.
     *
     * @var string|null
     */
    protected $deliveredAt;
    /**
     * The date the fulfillment was canceled at.
     *
     * @var string|null
     */
    protected $canceledAt;
    /**
     * The fulfillment's data, useful for the third-party provider handling the fulfillment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The fulfillment's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the fulfillment was created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the fulfillment was updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the fulfillment was deleted at.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The fulfillment's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The fulfillment's ID.
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
     * The ID of the location the fulfillment's items are shipped from.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location the fulfillment's items are shipped from.
     *
     * @param string|null $locationId
     *
     * @return self
     */
    public function setLocationId(?string $locationId): self
    {
        $this->initialized['locationId'] = true;
        $this->locationId = $locationId;
        return $this;
    }
    /**
     * The ID of the fulfillment provider handling this fulfillment.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the fulfillment provider handling this fulfillment.
     *
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * The ID of the shipping option this fulfillment is created for.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the shipping option this fulfillment is created for.
     *
     * @param string|null $shippingOptionId
     *
     * @return self
     */
    public function setShippingOptionId(?string $shippingOptionId): self
    {
        $this->initialized['shippingOptionId'] = true;
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }
    /**
     * The fulfillment provider's details.
     *
     * @return AdminFulfillmentProvider|null
     */
    public function getProvider(): ?AdminFulfillmentProvider
    {
        return $this->provider;
    }
    /**
     * The fulfillment provider's details.
     *
     * @param AdminFulfillmentProvider|null $provider
     *
     * @return self
     */
    public function setProvider(?AdminFulfillmentProvider $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * An address's details.
     *
     * @return AdminFulfillmentAddress|null
     */
    public function getDeliveryAddress(): ?AdminFulfillmentAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * An address's details.
     *
     * @param AdminFulfillmentAddress|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?AdminFulfillmentAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * The fulfillment's items.
     *
     * @return list<AdminFulfillmentItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The fulfillment's items.
     *
     * @param list<AdminFulfillmentItem>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * The fulfillment's shipment labels.
     *
     * @return list<AdminFulfillmentLabel>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * The fulfillment's shipment labels.
     *
     * @param list<AdminFulfillmentLabel>|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * The date the fulfillment was packed at.
     *
     * @return string|null
     */
    public function getPackedAt(): ?string
    {
        return $this->packedAt;
    }
    /**
     * The date the fulfillment was packed at.
     *
     * @param string|null $packedAt
     *
     * @return self
     */
    public function setPackedAt(?string $packedAt): self
    {
        $this->initialized['packedAt'] = true;
        $this->packedAt = $packedAt;
        return $this;
    }
    /**
     * The date the fulfillment was shipped at.
     *
     * @return string|null
     */
    public function getShippedAt(): ?string
    {
        return $this->shippedAt;
    }
    /**
     * The date the fulfillment was shipped at.
     *
     * @param string|null $shippedAt
     *
     * @return self
     */
    public function setShippedAt(?string $shippedAt): self
    {
        $this->initialized['shippedAt'] = true;
        $this->shippedAt = $shippedAt;
        return $this;
    }
    /**
     * The date the fulfillment was delivered at.
     *
     * @return string|null
     */
    public function getDeliveredAt(): ?string
    {
        return $this->deliveredAt;
    }
    /**
     * The date the fulfillment was delivered at.
     *
     * @param string|null $deliveredAt
     *
     * @return self
     */
    public function setDeliveredAt(?string $deliveredAt): self
    {
        $this->initialized['deliveredAt'] = true;
        $this->deliveredAt = $deliveredAt;
        return $this;
    }
    /**
     * The date the fulfillment was canceled at.
     *
     * @return string|null
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }
    /**
     * The date the fulfillment was canceled at.
     *
     * @param string|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?string $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * The fulfillment's data, useful for the third-party provider handling the fulfillment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * The fulfillment's data, useful for the third-party provider handling the fulfillment.
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The fulfillment's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The fulfillment's metadata, can hold custom key-value pairs.
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
     * The date the fulfillment was created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the fulfillment was created at.
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
     * The date the fulfillment was updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the fulfillment was updated at.
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
     * The date the fulfillment was deleted at.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the fulfillment was deleted at.
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