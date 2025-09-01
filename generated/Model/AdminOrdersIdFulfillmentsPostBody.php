<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrdersIdFulfillmentsPostBody extends \ArrayObject
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
     * The items to fulfill.
     *
     * @var list<AdminOrdersIdFulfillmentsPostBodyitemsItem>|null
     */
    protected $items;
    /**
     * The ID of the location to fulfill the items from. If not provided, the location associated with the shipping option of the order's shipping method is used.
     *
     * @var string|null
     */
    protected $locationId;
    /**
     * Whether to send the customer a notification about the created fulfillment.
     *
     * @var bool|null
     */
    protected $noNotification;
    /**
     * The order's metadata. Can hold custom key-value pairs.
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
     * The items to fulfill.
     *
     * @return list<AdminOrdersIdFulfillmentsPostBodyitemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The items to fulfill.
     *
     * @param list<AdminOrdersIdFulfillmentsPostBodyitemsItem>|null $items
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
     * The ID of the location to fulfill the items from. If not provided, the location associated with the shipping option of the order's shipping method is used.
     *
     * @return string|null
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }
    /**
     * The ID of the location to fulfill the items from. If not provided, the location associated with the shipping option of the order's shipping method is used.
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
     * Whether to send the customer a notification about the created fulfillment.
     *
     * @return bool|null
     */
    public function getNoNotification(): ?bool
    {
        return $this->noNotification;
    }
    /**
     * Whether to send the customer a notification about the created fulfillment.
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
     * The order's metadata. Can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The order's metadata. Can hold custom key-value pairs.
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