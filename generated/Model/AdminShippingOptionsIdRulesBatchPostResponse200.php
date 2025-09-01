<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionsIdRulesBatchPostResponse200 extends \ArrayObject
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
     * The created shipping option rules.
     *
     * @var list<AdminShippingOptionRule>|null
     */
    protected $created;
    /**
     * The updated shipping option rules.
     *
     * @var list<AdminShippingOptionRule>|null
     */
    protected $updated;
    /**
     * The details of the deleted shipping option rules.
     *
     * @var AdminShippingOptionsIdRulesBatchPostResponse200Deleted|null
     */
    protected $deleted;
    /**
     * The created shipping option rules.
     *
     * @return list<AdminShippingOptionRule>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created shipping option rules.
     *
     * @param list<AdminShippingOptionRule>|null $created
     *
     * @return self
     */
    public function setCreated(?array $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * The updated shipping option rules.
     *
     * @return list<AdminShippingOptionRule>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated shipping option rules.
     *
     * @param list<AdminShippingOptionRule>|null $updated
     *
     * @return self
     */
    public function setUpdated(?array $updated): self
    {
        $this->initialized['updated'] = true;
        $this->updated = $updated;
        return $this;
    }
    /**
     * The details of the deleted shipping option rules.
     *
     * @return AdminShippingOptionsIdRulesBatchPostResponse200Deleted|null
     */
    public function getDeleted(): ?AdminShippingOptionsIdRulesBatchPostResponse200Deleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted shipping option rules.
     *
     * @param AdminShippingOptionsIdRulesBatchPostResponse200Deleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminShippingOptionsIdRulesBatchPostResponse200Deleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}