<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionRule extends \ArrayObject
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
     * The shipping option rule's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The shipping option rule's attribute.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * The rule's operator.
     *
     * @var string|null
     */
    protected $operator;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $value;
    /**
     * The ID of the shipping option this rule is for.
     *
     * @var string|null
     */
    protected $shippingOptionId;
    /**
     * The date the shipping option rule was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * The date the shipping option rule was updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * The date the shipping option rule was deleted.
     *
     * @var \DateTime|null
     */
    protected $deletedAt;
    /**
     * The shipping option rule's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The shipping option rule's ID.
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
     * The shipping option rule's attribute.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The shipping option rule's attribute.
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
     * The rule's operator.
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }
    /**
     * The rule's operator.
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
     * 
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * 
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
     * The ID of the shipping option this rule is for.
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }
    /**
     * The ID of the shipping option this rule is for.
     *
     * @param string|null $shippingOptionId
     *
     * @return self
     */
    public function setShippingOptionId(?string $shippingOptionId): self
    {
        $this->initialized['shippingOptionId'] = true;
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }
    /**
     * The date the shipping option rule was created.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date the shipping option rule was created.
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
     * The date the shipping option rule was updated.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date the shipping option rule was updated.
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
     * The date the shipping option rule was deleted.
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
    /**
     * The date the shipping option rule was deleted.
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