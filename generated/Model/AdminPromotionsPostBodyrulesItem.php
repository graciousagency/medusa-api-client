<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsPostBodyrulesItem extends \ArrayObject
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
     * The operator used to check whether the buy rule applies on a cart. For example, `eq` means that the cart's value for the specified attribute must match the specified value.
     *
     * @var string|null
     */
    protected $operator;
    /**
     * The rule's description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The attribute to compare against when checking whether a promotion can be applied on a cart.
     *
     * @var string|null
     */
    protected $attribute;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $values;
    /**
     * The operator used to check whether the buy rule applies on a cart. For example, `eq` means that the cart's value for the specified attribute must match the specified value.
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }
    /**
     * The operator used to check whether the buy rule applies on a cart. For example, `eq` means that the cart's value for the specified attribute must match the specified value.
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
     * The rule's description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * The rule's description.
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
     * The attribute to compare against when checking whether a promotion can be applied on a cart.
     *
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * The attribute to compare against when checking whether a promotion can be applied on a cart.
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
    public function getValues()
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param mixed $values
     *
     * @return self
     */
    public function setValues($values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}