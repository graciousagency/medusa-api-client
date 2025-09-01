<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateFulfillment extends \ArrayObject
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
     * The ID of the location the items are fulfilled from.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * The ID of the provider handling this fulfillment.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The address to deliver the items to.
     *
     * @var AdminCreateFulfillmentDeliveryAddress|null
     */
    protected $deliveryAddress;
    /**
     * The items to fulfill.
     *
     * @var list<AdminCreateFulfillmentItemsItem>|null
     */
    protected $items;
    /**
     * The labels for the fulfillment's shipments.
     *
     * @var list<AdminCreateFulfillmentLabelsItem>|null
     */
    protected $labels;
    /**
     * The ID of the order this fulfillment is created for.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The ID of the shipping option used in the order.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * Any data useful for the fulfillment provider to handle the fulfillment.
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * The date and time the fulfillment was packed.
     *
     * @var \DateTime|null
     */
    protected $packedAt;
    /**
     * The date and time the fulfillment was shipped.
     *
     * @var \DateTime|null
     */
    protected $shippedAt;
    /**
     * The date and time the fulfillment was delivered.
     *
     * @var \DateTime|null
     */
    protected $deliveredAt;
    /**
     * The date and time the fulfillment was canceled.
     *
     * @var \DateTime|null
     */
    protected $canceledAt;
    /**
     * The fulfillment's metadata, used to store custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
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
     * The ID of the provider handling this fulfillment.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the provider handling this fulfillment.
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
     * The address to deliver the items to.
     *
     * @return AdminCreateFulfillmentDeliveryAddress|null
     */
    public function getDeliveryAddress(): ?AdminCreateFulfillmentDeliveryAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * The address to deliver the items to.
     *
     * @param AdminCreateFulfillmentDeliveryAddress|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?AdminCreateFulfillmentDeliveryAddress $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * The items to fulfill.
     *
     * @return list<AdminCreateFulfillmentItemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items to fulfill.
     *
     * @param list<AdminCreateFulfillmentItemsItem>|null $items
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
     * The labels for the fulfillment's shipments.
     *
     * @return list<AdminCreateFulfillmentLabelsItem>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * The labels for the fulfillment's shipments.
     *
     * @param list<AdminCreateFulfillmentLabelsItem>|null $labels
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
     * The ID of the order this fulfillment is created for.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the order this fulfillment is created for.
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
     * The ID of the shipping option used in the order.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the shipping option used in the order.
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
     * Any data useful for the fulfillment provider to handle the fulfillment.
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Any data useful for the fulfillment provider to handle the fulfillment.
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
     * The date and time the fulfillment was packed.
     *
     * @return \DateTime|null
     */
    public function getPackedAt(): ?\DateTime
    {
        return $this->packedAt;
    }
    /**
     * The date and time the fulfillment was packed.
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
     * The date and time the fulfillment was shipped.
     *
     * @return \DateTime|null
     */
    public function getShippedAt(): ?\DateTime
    {
        return $this->shippedAt;
    }
    /**
     * The date and time the fulfillment was shipped.
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
     * The date and time the fulfillment was delivered.
     *
     * @return \DateTime|null
     */
    public function getDeliveredAt(): ?\DateTime
    {
        return $this->deliveredAt;
    }
    /**
     * The date and time the fulfillment was delivered.
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
     * The date and time the fulfillment was canceled.
     *
     * @return \DateTime|null
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }
    /**
     * The date and time the fulfillment was canceled.
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
     * The fulfillment's metadata, used to store custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The fulfillment's metadata, used to store custom key-value pairs.
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