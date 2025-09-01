<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderShippingMethodAdjustmentsItemshippingMethodDetail extends \ArrayObject
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
     * The detail's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The detail's shipping method id.
     *
     * @var string|null
     */
    protected $shippingMethodId;
    /**
     * The detail's shipping method.
     *
     * @var array<string, mixed>|null
     */
    protected $shippingMethod;
    /**
     * The detail's claim id.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The detail's exchange id.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The detail's return id.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The detail's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The detail's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The detail's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The detail's ID.
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
     * The detail's shipping method id.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The detail's shipping method id.
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
     * The detail's shipping method.
     *
     * @return array<string, mixed>|null
     */
    public function getShippingMethod(): ?iterable
    {
        return $this->shippingMethod;
    }
    /**
     * The detail's shipping method.
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
     * The detail's claim id.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The detail's claim id.
     *
     * @param string|null $claimId
     *
     * @return self
     */
    public function setClaimId(?string $claimId): self
    {
        $this->initialized['claimId'] = true;
        $this->claimId = $claimId;
        return $this;
    }
    /**
     * The detail's exchange id.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The detail's exchange id.
     *
     * @param string|null $exchangeId
     *
     * @return self
     */
    public function setExchangeId(?string $exchangeId): self
    {
        $this->initialized['exchangeId'] = true;
        $this->exchangeId = $exchangeId;
        return $this;
    }
    /**
     * The detail's return id.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The detail's return id.
     *
     * @param string|null $returnId
     *
     * @return self
     */
    public function setReturnId(?string $returnId): self
    {
        $this->initialized['returnId'] = true;
        $this->returnId = $returnId;
        return $this;
    }
    /**
     * The detail's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The detail's created at.
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
     * The detail's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The detail's updated at.
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