<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchInventoryItemsLocationLevelsResponse extends \ArrayObject
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
     * The created inventory levels.
     *
     * @var list<InventoryLevel>|null
     */
    protected $created;
    /**
     * The updated inventory levels.
     *
     * @var list<InventoryLevel>|null
     */
    protected $updated;
    /**
     * The IDs of deleted inventory levels.
     *
     * @var list<string>|null
     */
    protected $deleted;
    /**
     * The created inventory levels.
     *
     * @return list<InventoryLevel>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created inventory levels.
     *
     * @param list<InventoryLevel>|null $created
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
     * The updated inventory levels.
     *
     * @return list<InventoryLevel>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated inventory levels.
     *
     * @param list<InventoryLevel>|null $updated
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
     * The IDs of deleted inventory levels.
     *
     * @return list<string>|null
     */
    public function getDeleted(): ?array
    {
        return $this->deleted;
    }
    /**
     * The IDs of deleted inventory levels.
     *
     * @param list<string>|null $deleted
     *
     * @return self
     */
    public function setDeleted(?array $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}