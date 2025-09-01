<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreOrderShippingMethodTaxLinesItemshippingMethodTaxLinesItem extends \ArrayObject
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
     * The tax line's shipping method.
     *
     * @var array<string, mixed>|null
     */
    protected $shippingMethod;
    /**
     * The tax line's shipping method id.
     *
     * @var string|null
     */
    protected $shippingMethodId;
    /**
     * The tax line's total.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The tax line's subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * The tax line's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The tax line's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The tax line's tax rate id.
     *
     * @var string|null
     */
    protected $taxRateId;
    /**
     * The tax line's code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The tax line's rate.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * The tax line's provider id.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The tax line's created at.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The tax line's updated at.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The tax line's shipping method.
     *
     * @return array<string, mixed>|null
     */
    public function getShippingMethod(): ?iterable
    {
        return $this->shippingMethod;
    }
    /**
     * The tax line's shipping method.
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
     * The tax line's shipping method id.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string
    {
        return $this->shippingMethodId;
    }
    /**
     * The tax line's shipping method id.
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
     * The tax line's total.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The tax line's total.
     *
     * @param float|null $total
     *
     * @return self
     */
    public function setTotal(?float $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * The tax line's subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The tax line's subtotal.
     *
     * @param float|null $subtotal
     *
     * @return self
     */
    public function setSubtotal(?float $subtotal): self
    {
        $this->initialized['subtotal'] = true;
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * The tax line's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The tax line's ID.
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
     * The tax line's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The tax line's description.
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
     * The tax line's tax rate id.
     *
     * @return string|null
     */
    public function getTaxRateId(): ?string
    {
        return $this->taxRateId;
    }
    /**
     * The tax line's tax rate id.
     *
     * @param string|null $taxRateId
     *
     * @return self
     */
    public function setTaxRateId(?string $taxRateId): self
    {
        $this->initialized['taxRateId'] = true;
        $this->taxRateId = $taxRateId;
        return $this;
    }
    /**
     * The tax line's code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The tax line's code.
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
     * The tax line's rate.
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }
    /**
     * The tax line's rate.
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * The tax line's provider id.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The tax line's provider id.
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
     * The tax line's created at.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The tax line's created at.
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
     * The tax line's updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The tax line's updated at.
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