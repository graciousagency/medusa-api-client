<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInventoryItemsIdLocationLevelsLocationIdDeleteResponse200 extends \ArrayObject
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
     * The inventory item's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object;
    /**
     * Whether the Inventory Item was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The inventory item's details.
     *
     * @var AdminInventoryItem|null
     */
    protected $parent;
    /**
     * The inventory item's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The inventory item's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the deleted object.
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->object;
    }
    /**
     * The name of the deleted object.
     *
     * @param string|null $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * Whether the Inventory Item was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the Inventory Item was deleted.
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The inventory item's details.
     *
     * @return AdminInventoryItem|null
     */
    public function getParent(): ?AdminInventoryItem
    {
        return $this->parent;
    }
    /**
     * The inventory item's details.
     *
     * @param AdminInventoryItem|null $parent
     *
     * @return self
     */
    public function setParent(?AdminInventoryItem $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}