<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsRuleAttributeOptionsRuleTypeGetResponse200 extends \ArrayObject
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
     * The list of attributes.
     *
     * @var list<AdminRuleAttributeOption>|null
     */
    protected $attributes;
    /**
     * The list of attributes.
     *
     * @return list<AdminRuleAttributeOption>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }
    /**
     * The list of attributes.
     *
     * @param list<AdminRuleAttributeOption>|null $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}