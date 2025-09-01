<?php

namespace Gracious\MedusaApiClientBundle\Model;

class BaseOrderLineItemTaxLine extends \ArrayObject
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
    protected $item;
    /**
     * The ID of the associated line item.
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * The tax line's total including promotions.
     *
     * @var float|null
     */
    protected $total;
    /**
     * The tax line's subtotal excluding promotions.
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
     * The ID of the applied tax rate.
     *
     * @var string|null
     */
    protected $taxRateId;
    /**
     * The code that the tax rate is identified by.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The rate to charge.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * The ID of the tax provider used to calculate the tax line.
     *
     * @var string|null
     */
    protected $providerId;
    /**
     * The date the tax line was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the tax line was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getItem(): ?iterable
    {
        return $this->item;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $item
     *
     * @return self
     */
    public function setItem(?iterable $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * The ID of the associated line item.
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * The ID of the associated line item.
     *
     * @param string|null $itemId
     *
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * The tax line's total including promotions.
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }
    /**
     * The tax line's total including promotions.
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
     * The tax line's subtotal excluding promotions.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * The tax line's subtotal excluding promotions.
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
     * The ID of the applied tax rate.
     *
     * @return string|null
     */
    public function getTaxRateId(): ?string
    {
        return $this->taxRateId;
    }
    /**
     * The ID of the applied tax rate.
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
     * The code that the tax rate is identified by.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * The code that the tax rate is identified by.
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
     * The rate to charge.
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }
    /**
     * The rate to charge.
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
     * The ID of the tax provider used to calculate the tax line.
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * The ID of the tax provider used to calculate the tax line.
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
     * The date the tax line was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the tax line was created.
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
     * The date the tax line was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the tax line was updated.
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