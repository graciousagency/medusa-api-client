<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdRuleTypeGetResponse200 extends \ArrayObject
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
     * The list of promotion rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $rules;
    /**
     * The list of promotion rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }
    /**
     * The list of promotion rules.
     *
     * @param list<AdminPromotionRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
}