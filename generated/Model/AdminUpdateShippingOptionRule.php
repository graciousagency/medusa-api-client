<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminUpdateShippingOptionRule extends \ArrayObject
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
     * The rule's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The operator used to check whether a rule applies.
     *
     * @var string|null
     */
    protected $operator;
    /**
     * The name of a property or table that the rule applies to.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $value;
    /**
     * The rule's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The rule's ID.
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
     * The operator used to check whether a rule applies.
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }
    /**
     * The operator used to check whether a rule applies.
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
     * The name of a property or table that the rule applies to.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The name of a property or table that the rule applies to.
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
}