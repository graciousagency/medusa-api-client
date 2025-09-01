<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderShippingDetail extends \ArrayObject
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
     * The ID of the new changes to the shipping method.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the shipping method.
     *
     * @var string|null
     */
    protected $shippingMethodId;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $shippingMethod;
    /**
     * The ID of the associated claim.
     *
     * @var string|null
     */
    protected $claimId;
    /**
     * The ID of the associated exchange.
     *
     * @var string|null
     */
    protected $exchangeId;
    /**
     * The ID of the associated return.
     *
     * @var string|null
     */
    protected $returnId;
    /**
     * The date the shipping method change was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the shipping method change was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The ID of the new changes to the shipping method.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The ID of the new changes to the shipping method.
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
     * The ID of the shipping method.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The ID of the shipping method.
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
     * The ID of the associated claim.
     *
     * @return string|null
     */
    public function getClaimId(): ?string
    {
        return $this->claimId;
    }
    /**
     * The ID of the associated claim.
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
     * The ID of the associated exchange.
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        return $this->exchangeId;
    }
    /**
     * The ID of the associated exchange.
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
     * The ID of the associated return.
     *
     * @return string|null
     */
    public function getReturnId(): ?string
    {
        return $this->returnId;
    }
    /**
     * The ID of the associated return.
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
     * The date the shipping method change was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the shipping method change was created.
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
     * The date the shipping method change was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the shipping method change was updated.
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