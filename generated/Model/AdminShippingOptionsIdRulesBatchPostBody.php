<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingOptionsIdRulesBatchPostBody extends \ArrayObject
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
     * The shipping option rules to create.
     *
     * @var list<AdminCreateShippingOptionRule>|null
     */
    protected $create;
    /**
     * The shipping option rules to update.
     *
     * @var list<AdminUpdateShippingOptionRule>|null
     */
    protected $update;
    /**
     * The shipping option rules to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * The shipping option rules to create.
     *
     * @return list<AdminCreateShippingOptionRule>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The shipping option rules to create.
     *
     * @param list<AdminCreateShippingOptionRule>|null $create
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
     * The shipping option rules to update.
     *
     * @return list<AdminUpdateShippingOptionRule>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The shipping option rules to update.
     *
     * @param list<AdminUpdateShippingOptionRule>|null $update
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
     * The shipping option rules to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The shipping option rules to delete.
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