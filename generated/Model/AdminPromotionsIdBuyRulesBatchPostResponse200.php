<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdBuyRulesBatchPostResponse200 extends \ArrayObject
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
     * The created buy rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $created;
    /**
     * The updated buy rules.
     *
     * @var list<AdminPromotionRule>|null
     */
    protected $updated;
    /**
     * The details of the deleted buy rules.
     *
     * @var AdminPromotionsIdBuyRulesBatchPostResponse200Deleted|null
     */
    protected $deleted;
    /**
     * The created buy rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created buy rules.
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
     * The updated buy rules.
     *
     * @return list<AdminPromotionRule>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated buy rules.
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
     * @return AdminPromotionsIdBuyRulesBatchPostResponse200Deleted|null
     */
    public function getDeleted(): ?AdminPromotionsIdBuyRulesBatchPostResponse200Deleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted buy rules.
     *
     * @param AdminPromotionsIdBuyRulesBatchPostResponse200Deleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminPromotionsIdBuyRulesBatchPostResponse200Deleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}