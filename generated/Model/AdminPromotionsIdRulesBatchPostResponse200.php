<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdRulesBatchPostResponse200 extends \ArrayObject
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
     * The created rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $created;
    /**
     * The updated rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $updated;
    /**
     * The details of the deleted buy rules.
     *
     * @var AdminPromotionsIdRulesBatchPostResponse200Deleted|null
     */
    protected $deleted;
    /**
     * The created rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created rules.
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
     * The updated rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated rules.
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
     * The details of the deleted buy rules.
     *
     * @return AdminPromotionsIdRulesBatchPostResponse200Deleted|null
     */
    public function getDeleted(): ?AdminPromotionsIdRulesBatchPostResponse200Deleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted buy rules.
     *
     * @param AdminPromotionsIdRulesBatchPostResponse200Deleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminPromotionsIdRulesBatchPostResponse200Deleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}