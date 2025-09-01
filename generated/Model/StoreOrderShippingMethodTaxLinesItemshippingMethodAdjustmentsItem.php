<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderShippingMethodTaxLinesItemshippingMethodAdjustmentsItem extends \ArrayObject
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
     * The adjustment's shipping method.
     *
     * @var array<string, mixed>|null
     */
    protected $shippingMethod;
    /**
     * The adjustment's shipping method id.
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
     * The adjustment's order id.
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
     * The adjustment's promotion id.
     *
     * @var string|null
     */
    protected $promotionId;
    /**
     * The adjustment's provider id.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The adjustment's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The adjustment's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The adjustment's shipping method.
     *
     * @return array<string, mixed>|null
     */
    public function getShippingMethod(): ?iterable
    {
        return $this->shippingMethod;
    }
    /**
     * The adjustment's shipping method.
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
     * The adjustment's shipping method id.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The adjustment's shipping method id.
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
     * The adjustment's order id.
     *
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * The adjustment's order id.
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
     * The adjustment's promotion id.
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        return $this->promotionId;
    }
    /**
     * The adjustment's promotion id.
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
     * The adjustment's provider id.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The adjustment's provider id.
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
     * The adjustment's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The adjustment's created at.
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
     * The adjustment's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The adjustment's updated at.
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