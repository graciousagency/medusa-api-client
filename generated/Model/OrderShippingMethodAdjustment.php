<?php

namespace Gracious\MedusaApiClientBundle\Model;

class OrderShippingMethodAdjustment extends \ArrayObject
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
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $shippingMethod;
    /**
     * The ID of the shipping method this adjustment is for.
     *
     * @var string|null
     */
    protected $shippingMethodId;
    /**
     * The adjustment's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The adjustment's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The adjustment's amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The ID of the associated order.
     *
     * @var string|null
     */
    protected $orderId;
    /**
     * The adjustment's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The ID of the promotion this adjustment applies.
     *
     * @var string|null
     */
    protected $promotionId;
    /**
     * The adjustment's provider ID.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The date the adjustment was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the adjustment was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getShippingMethod(): ?iterable
    {
        return $this->shippingMethod;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $shippingMethod
     *
     * @return self
     */
    public function setShippingMethod(?iterable $shippingMethod): self
    {
        $this->initialized['shippingMethod'] = true;
        $this->shippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * The ID of the shipping method this adjustment is for.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The ID of the shipping method this adjustment is for.
     *
     * @param string|null $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(?string $shippingMethodId): self
    {
        $this->initialized['shippingMethodId'] = true;
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * The adjustment's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The adjustment's ID.
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
     * The adjustment's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The adjustment's code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * The adjustment's amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * The adjustment's amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * The ID of the associated order.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The ID of the associated order.
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
     * The adjustment's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The adjustment's description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The ID of the promotion this adjustment applies.
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->promotionId;
    }
    /**
     * The ID of the promotion this adjustment applies.
     *
     * @param string|null $promotionId
     *
     * @return self
     */
    public function setPromotionId(?string $promotionId): self
    {
        $this->initialized['promotionId'] = true;
        $this->promotionId = $promotionId;
        return $this;
    }
    /**
     * The adjustment's provider ID.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The adjustment's provider ID.
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
     * The date the adjustment was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the adjustment was created.
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
     * The date the adjustment was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the adjustment was updated.
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