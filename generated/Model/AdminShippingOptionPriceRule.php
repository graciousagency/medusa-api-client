<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionPriceRule extends \ArrayObject
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
     * The price rule's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The price rule's value.
     *
     * @var mixed|null
     */
    protected $value;
    /**
     * The price rule's operator.
     *
     * @var string|null
     */
    protected $operator;
    /**
     * The price rule's attribute.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * The ID of the price this rule applies to.
     *
     * @var string|null
     */
    protected $priceId;
    /**
     * The price rule's priority.
     *
     * @var float|null
     */
    protected $priority;
    /**
     * The date the price rule was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the price rule was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the price rule was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The price rule's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The price rule's ID.
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
     * The price rule's value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The price rule's value.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The price rule's operator.
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }
    /**
     * The price rule's operator.
     *
     * @param string|null $operator
     *
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * The price rule's attribute.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The price rule's attribute.
     *
     * @param string|null $attribute
     *
     * @return self
     */
    public function setAttribute(?string $attribute): self
    {
        $this->initialized['attribute'] = true;
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * The ID of the price this rule applies to.
     *
     * @return string|null
     */
    public function getPriceId(): ?string
    {
        return $this->priceId;
    }
    /**
     * The ID of the price this rule applies to.
     *
     * @param string|null $priceId
     *
     * @return self
     */
    public function setPriceId(?string $priceId): self
    {
        $this->initialized['priceId'] = true;
        $this->priceId = $priceId;
        return $this;
    }
    /**
     * The price rule's priority.
     *
     * @return float|null
     */
    public function getPriority(): ?float
    {
        return $this->priority;
    }
    /**
     * The price rule's priority.
     *
     * @param float|null $priority
     *
     * @return self
     */
    public function setPriority(?float $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * The date the price rule was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the price rule was created.
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
     * The date the price rule was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the price rule was updated.
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
    /**
     * The date the price rule was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the price rule was deleted.
     *
     * @param \DateTime|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}