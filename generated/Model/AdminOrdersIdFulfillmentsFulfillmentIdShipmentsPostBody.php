<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBody extends \ArrayObject
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
     * The items to create shipment for.
     *
     * @var list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem>|null
     */
    protected $items;
    /**
     * The labels to create for the shipment.
     *
     * @var list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem>|null
     */
    protected $labels;
    /**
     * Whether to send the customer a notification about the created shipment.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The shipment's metadata. Can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @var array<string, mixed>|null
     */
    protected $additionalData;
    /**
     * The items to create shipment for.
     *
     * @return list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items to create shipment for.
     *
     * @param list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodyitemsItem>|null $items
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
     * The labels to create for the shipment.
     *
     * @return list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * The labels to create for the shipment.
     *
     * @param list<AdminOrdersIdFulfillmentsFulfillmentIdShipmentsPostBodylabelsItem>|null $labels
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
     * Whether to send the customer a notification about the created shipment.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether to send the customer a notification about the created shipment.
     *
     * @param bool|null $noNotification
     *
     * @return self
     */
    public function setNoNotification(?bool $noNotification): self
    {
        $this->initialized['noNotification'] = true;
        $this->noNotification = $noNotification;
        return $this;
    }
    /**
     * The shipment's metadata. Can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The shipment's metadata. Can hold custom key-value pairs.
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
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @return array<string, mixed>|null
     */
    public function getAdditionalData(): ?iterable
    {
        return $this->additionalData;
    }
    /**
     * Pass additional custom data to the API route. This data is passed to the underlying workflow under the `additional_data` parameter.
     *
     * @param array<string, mixed>|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?iterable $additionalData): self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
}