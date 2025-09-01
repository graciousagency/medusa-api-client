<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchInventoryItemsLocationLevels extends \ArrayObject
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
     * The inventory levels to create.
     *
     * @var list<AdminBatchCreateInventoryItemsLocationLevels>|null
     */
    protected $create;
    /**
     * The inventory levels to update.
     *
     * @var list<AdminBatchUpdateInventoryItemsLocationLevels>|null
     */
    protected $update;
    /**
     * The IDs of the inventory levels to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * Whether to delete specified inventory levels even if they have a non-zero stocked quantity.
     *
     * @var bool|null
     */
    protected $force;
    /**
     * The inventory levels to create.
     *
     * @return list<AdminBatchCreateInventoryItemsLocationLevels>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The inventory levels to create.
     *
     * @param list<AdminBatchCreateInventoryItemsLocationLevels>|null $create
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
     * The inventory levels to update.
     *
     * @return list<AdminBatchUpdateInventoryItemsLocationLevels>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The inventory levels to update.
     *
     * @param list<AdminBatchUpdateInventoryItemsLocationLevels>|null $update
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
     * The IDs of the inventory levels to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The IDs of the inventory levels to delete.
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
    /**
     * Whether to delete specified inventory levels even if they have a non-zero stocked quantity.
     *
     * @return bool|null
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }
    /**
     * Whether to delete specified inventory levels even if they have a non-zero stocked quantity.
     *
     * @param bool|null $force
     *
     * @return self
     */
    public function setForce(?bool $force): self
    {
        $this->initialized['force'] = true;
        $this->force = $force;
        return $this;
    }
}