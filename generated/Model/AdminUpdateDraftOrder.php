<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateDraftOrder extends \ArrayObject
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
     * The customer email associated with the draft order.
     *
     * @var string|null
     */
    protected $email;
    /**
     * The draft order's shipping address.
     *
     * @var AdminUpdateDraftOrderShippingAddress|null
     */
    protected $shippingAddress;
    /**
     * The draft order's billing address.
     *
     * @var AdminUpdateDraftOrderBillingAddress|null
     */
    protected $billingAddress;
    /**
     * The draft order's metadata, can hold custom key-value pairs.
     *
     * @var array<string, mixed>|null
     */
    protected $metadata;
    /**
     * The ID of the customer associated with the draft order.
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * The ID of the sales channel associated with the draft order.
     *
     * @var string|null
     */
    protected $salesChannelId;
    /**
     * The customer email associated with the draft order.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The customer email associated with the draft order.
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
     * The draft order's shipping address.
     *
     * @return AdminUpdateDraftOrderShippingAddress|null
     */
    public function getShippingAddress(): ?AdminUpdateDraftOrderShippingAddress
    {
        return $this->shippingAddress;
    }
    /**
     * The draft order's shipping address.
     *
     * @param AdminUpdateDraftOrderShippingAddress|null $shippingAddress
     *
     * @return self
     */
    public function setShippingAddress(?AdminUpdateDraftOrderShippingAddress $shippingAddress): self
    {
        $this->initialized['shippingAddress'] = true;
        $this->shippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * The draft order's billing address.
     *
     * @return AdminUpdateDraftOrderBillingAddress|null
     */
    public function getBillingAddress(): ?AdminUpdateDraftOrderBillingAddress
    {
        return $this->billingAddress;
    }
    /**
     * The draft order's billing address.
     *
     * @param AdminUpdateDraftOrderBillingAddress|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?AdminUpdateDraftOrderBillingAddress $billingAddress): self
    {
        $this->initialized['billingAddress'] = true;
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * The draft order's metadata, can hold custom key-value pairs.
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): ?iterable
    {
        return $this->metadata;
    }
    /**
     * The draft order's metadata, can hold custom key-value pairs.
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
     * The ID of the customer associated with the draft order.
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * The ID of the customer associated with the draft order.
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
     * The ID of the sales channel associated with the draft order.
     *
     * @return string|null
     */
    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }
    /**
     * The ID of the sales channel associated with the draft order.
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
}