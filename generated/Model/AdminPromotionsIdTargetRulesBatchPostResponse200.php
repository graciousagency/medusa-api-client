<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdTargetRulesBatchPostResponse200 extends \ArrayObject
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
     * The created target rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $created;
    /**
     * The updated target rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $updated;
    /**
     * The details of the deleted target rules.
     *
     * @var AdminPromotionsIdTargetRulesBatchPostResponse200Deleted|null
     */
    protected $deleted;
    /**
     * The created target rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created target rules.
     *
     * @param list<AdminPromotionRule>|null $created
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
     * The updated target rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated target rules.
     *
     * @param list<AdminPromotionRule>|null $updated
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
     * The details of the deleted target rules.
     *
     * @return AdminPromotionsIdTargetRulesBatchPostResponse200Deleted|null
     */
    public function getDeleted(): ?AdminPromotionsIdTargetRulesBatchPostResponse200Deleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted target rules.
     *
     * @param AdminPromotionsIdTargetRulesBatchPostResponse200Deleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminPromotionsIdTargetRulesBatchPostResponse200Deleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}