<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRuleAttributeOption extends \ArrayObject
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
     * The rule attribute's ID, which is a rule's `attribute` it refers to.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The rule attribute's value.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The rule attribute option's label.
     *
     * @var string|null
     */
    protected $label;
    /**
     * The attribute's operators.
     *
     * @var list<BaseRuleOperatorOptions>|null
     */
    protected $operators;
    /**
     * The rule attribute's ID, which is a rule's `attribute` it refers to.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The rule attribute's ID, which is a rule's `attribute` it refers to.
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
     * The rule attribute's value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * The rule attribute's value.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The rule attribute option's label.
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * The rule attribute option's label.
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The attribute's operators.
     *
     * @return list<BaseRuleOperatorOptions>|null
     */
    public function getOperators(): ?array
    {
        return $this->operators;
    }
    /**
     * The attribute's operators.
     *
     * @param list<BaseRuleOperatorOptions>|null $operators
     *
     * @return self
     */
    public function setOperators(?array $operators): self
    {
        $this->initialized['operators'] = true;
        $this->operators = $operators;
        return $this;
    }
}