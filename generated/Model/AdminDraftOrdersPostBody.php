<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminDraftOrdersPostBody extends \ArrayObject
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
     * The draft order's status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The ID of the associated sales channel.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The email of the draft order's customer.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The ID of the draft order's customer.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The billing address's details.
     *
     * @var AdminDraftOrdersPostBodybillingAddress|null
     */
    protected $billingAddress;
    /**
     * The draft order's shipping address.
     *
     * @var AdminDraftOrdersPostBodyshippingAddress|null
     */
    protected $shippingAddress;
    /**
     * The draft order's items.
     *
     * @var list<AdminDraftOrdersPostBodyitemsItem>|null
     */
    protected $items;
    /**
     * The ID of the associated region.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * The promotion codes applied on the draft order.
     *
     * @var list<string>|null
     */
    protected $promoCodes;
    /**
     * The draft order's currency code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Whether to send the customer notifications on order changes.
     *
     * @var bool|null
     */
    protected $noNotificationOrder;
    /**
     * The draft order's shipping methods.
     *
     * @var list<AdminDraftOrdersPostBodyshippingMethodsItem>|null
     */
    protected $shippingMethods;
    /**
     * The draft order's metadata.
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
     * The draft order's status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * The draft order's status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The ID of the associated sales channel.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the associated sales channel.
     *
     * @param string|null $salesChannelId
     *
     * @return self
     */
    public function setSalesChannelId(?string $salesChannelId): self
    {
        $this->initialized['salesChannelId'] = true;
        $this->salesChannelId = $salesChannelId;
        return $this;
    }
    /**
     * The email of the draft order's customer.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The email of the draft order's customer.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The ID of the draft order's customer.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the draft order's customer.
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The billing address's details.
     *
     * @return AdminDraftOrdersPostBodybillingAddress|null
     */
    public function getBillingAddress(): ?AdminDraftOrdersPostBodybillingAddress
    {
        return $this->billingAddress;
    }
    /**
     * The billing address's details.
     *
     * @param AdminDraftOrdersPostBodybillingAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?AdminDraftOrdersPostBodybillingAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The draft order's shipping address.
     *
     * @return AdminDraftOrdersPostBodyshippingAddress|null
     */
    public function getShippingAddress(): ?AdminDraftOrdersPostBodyshippingAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The draft order's shipping address.
     *
     * @param AdminDraftOrdersPostBodyshippingAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?AdminDraftOrdersPostBodyshippingAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The draft order's items.
     *
     * @return list<AdminDraftOrdersPostBodyitemsItem>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * The draft order's items.
     *
     * @param list<AdminDraftOrdersPostBodyitemsItem>|null $items
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
     * The ID of the associated region.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * The ID of the associated region.
     *
     * @param string|null $regionId
     *
     * @return self
     */
    public function setRegionId(?string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * The promotion codes applied on the draft order.
     *
     * @return list<string>|null
     */
    public function getPromoCodes(): ?array
    {
        return $this->promoCodes;
    }
    /**
     * The promotion codes applied on the draft order.
     *
     * @param list<string>|null $promoCodes
     *
     * @return self
     */
    public function setPromoCodes(?array $promoCodes): self
    {
        $this->initialized['promoCodes'] = true;
        $this->promoCodes = $promoCodes;
        return $this;
    }
    /**
     * The draft order's currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * The draft order's currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Whether to send the customer notifications on order changes.
     *
     * @return bool|null
     */
    public function getNoNotificationOrder(): ?bool
    {
        return $this->noNotificationOrder;
    }
    /**
     * Whether to send the customer notifications on order changes.
     *
     * @param bool|null $noNotificationOrder
     *
     * @return self
     */
    public function setNoNotificationOrder(?bool $noNotificationOrder): self
    {
        $this->initialized['noNotificationOrder'] = true;
        $this->noNotificationOrder = $noNotificationOrder;
        return $this;
    }
    /**
     * The draft order's shipping methods.
     *
     * @return list<AdminDraftOrdersPostBodyshippingMethodsItem>|null
     */
    public function getShippingMethods(): ?array
    {
        return $this->shippingMethods;
    }
    /**
     * The draft order's shipping methods.
     *
     * @param list<AdminDraftOrdersPostBodyshippingMethodsItem>|null $shippingMethods
     *
     * @return self
     */
    public function setShippingMethods(?array $shippingMethods): self
    {
        $this->initialized['shippingMethods'] = true;
        $this->shippingMethods = $shippingMethods;
        return $this;
    }
    /**
     * The draft order's metadata.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The draft order's metadata.
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