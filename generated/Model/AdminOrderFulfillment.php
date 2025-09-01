<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderFulfillment extends \ArrayObject
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
     * The ID of the location the items are fulfilled from.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The date the items were packed.
     *
     * @var \DateTime|null
     */
    protected $packedAt;
    /**
     * The date the items were shipped.
     *
     * @var \DateTime|null
     */
    protected $shippedAt;
    /**
     * The date the items were delivered.
     *
     * @var \DateTime|null
     */
    protected $deliveredAt;
    /**
     * The date the items were canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * Data useful for the fulfillment provider handling it. This is taken from the associated shipping option.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The ID of the fulfillment provider used to handle the fulfillment.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The ID of the associated shipping option.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The fulfillment's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The date the fulfillment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the fulfillment was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Whether the fulfillment requires shipping.
     *
     * @var bool|null
     */
    protected $requiresShipping;
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
     * The ID of the location the items are fulfilled from.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location the items are fulfilled from.
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
     * The date the items were packed.
     *
     * @return \DateTime|null
     */
    public function getPackedAt(): ?\DateTime
    {
        return $this->packedAt;
    }
    /**
     * The date the items were packed.
     *
     * @param \DateTime|null $packedAt
     *
     * @return self
     */
    public function setPackedAt(?\DateTime $packedAt): self
    {
        $this->initialized['packedAt'] = true;
        $this->packedAt = $packedAt;
        return $this;
    }
    /**
     * The date the items were shipped.
     *
     * @return \DateTime|null
     */
    public function getShippedAt(): ?\DateTime
    {
        return $this->shippedAt;
    }
    /**
     * The date the items were shipped.
     *
     * @param \DateTime|null $shippedAt
     *
     * @return self
     */
    public function setShippedAt(?\DateTime $shippedAt): self
    {
        $this->initialized['shippedAt'] = true;
        $this->shippedAt = $shippedAt;
        return $this;
    }
    /**
     * The date the items were delivered.
     *
     * @return \DateTime|null
     */
    public function getDeliveredAt(): ?\DateTime
    {
        return $this->deliveredAt;
    }
    /**
     * The date the items were delivered.
     *
     * @param \DateTime|null $deliveredAt
     *
     * @return self
     */
    public function setDeliveredAt(?\DateTime $deliveredAt): self
    {
        $this->initialized['deliveredAt'] = true;
        $this->deliveredAt = $deliveredAt;
        return $this;
    }
    /**
     * The date the items were canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date the items were canceled.
     *
     * @param \DateTime|null $canceledAt
     *
     * @return self
     */
    public function setCanceledAt(?\DateTime $canceledAt): self
    {
        $this->initialized['canceledAt'] = true;
        $this->canceledAt = $canceledAt;
        return $this;
    }
    /**
     * Data useful for the fulfillment provider handling it. This is taken from the associated shipping option.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Data useful for the fulfillment provider handling it. This is taken from the associated shipping option.
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
     * The ID of the fulfillment provider used to handle the fulfillment.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the fulfillment provider used to handle the fulfillment.
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
     * The ID of the associated shipping option.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the associated shipping option.
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
     * The date the fulfillment was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the fulfillment was created.
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
     * The date the fulfillment was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the fulfillment was updated.
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
     * Whether the fulfillment requires shipping.
     *
     * @return bool|null
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }
    /**
     * Whether the fulfillment requires shipping.
     *
     * @param bool|null $requiresShipping
     *
     * @return self
     */
    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->initialized['requiresShipping'] = true;
        $this->requiresShipping = $requiresShipping;
        return $this;
    }
}