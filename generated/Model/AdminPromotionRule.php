<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionRule extends \ArrayObject
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
     * The promotion rule's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The promotion rule's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The promotion rule's attribute.
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
     * The rule's values.
     *
     * @var list<BasePromotionRuleValue>|null
     */
    protected $values;
    /**
     * The promotion rule's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The promotion rule's ID.
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
     * The promotion rule's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The promotion rule's description.
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
     * The promotion rule's attribute.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The promotion rule's attribute.
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
     * The rule's values.
     *
     * @return list<BasePromotionRuleValue>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     * The rule's values.
     *
     * @param list<BasePromotionRuleValue>|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}