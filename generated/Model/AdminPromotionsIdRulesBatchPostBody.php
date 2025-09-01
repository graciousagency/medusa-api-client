<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdRulesBatchPostBody extends \ArrayObject
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
     * The rules to create.
     *
     * @var list<AdminCreatePromotionRule>|null
     */
    protected $create;
    /**
     * The rules to update.
     *
     * @var list<AdminUpdatePromotionRule>|null
     */
    protected $update;
    /**
     * The rules to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * The rules to create.
     *
     * @return list<AdminCreatePromotionRule>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The rules to create.
     *
     * @param list<AdminCreatePromotionRule>|null $create
     *
     * @return self
     */
    public function setCreate(?array $create): self
    {
        $this->initialized['create'] = true;
        $this->create = $create;
        return $this;
    }
    /**
     * The rules to update.
     *
     * @return list<AdminUpdatePromotionRule>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The rules to update.
     *
     * @param list<AdminUpdatePromotionRule>|null $update
     *
     * @return self
     */
    public function setUpdate(?array $update): self
    {
        $this->initialized['update'] = true;
        $this->update = $update;
        return $this;
    }
    /**
     * The rules to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The rules to delete.
     *
     * @param list<string>|null $delete
     *
     * @return self
     */
    public function setDelete(?array $delete): self
    {
        $this->initialized['delete'] = true;
        $this->delete = $delete;
        return $this;
    }
}