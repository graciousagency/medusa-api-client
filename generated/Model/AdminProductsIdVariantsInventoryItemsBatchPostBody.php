<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductsIdVariantsInventoryItemsBatchPostBody extends \ArrayObject
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
     * The The associations to create between product variants and inventory items.
     *
     * @var list<AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem>|null
     */
    protected $create;
    /**
     * The product variants to update their association with inventory items.
     *
     * @var list<AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem>|null
     */
    protected $update;
    /**
     * The product variants to delete their association with inventory items.
     *
     * @var list<AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItem>|null
     */
    protected $delete;
    /**
     * The The associations to create between product variants and inventory items.
     *
     * @return list<AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The The associations to create between product variants and inventory items.
     *
     * @param list<AdminProductsIdVariantsInventoryItemsBatchPostBodyCreateItem>|null $create
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
     * The product variants to update their association with inventory items.
     *
     * @return list<AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The product variants to update their association with inventory items.
     *
     * @param list<AdminProductsIdVariantsInventoryItemsBatchPostBodyUpdateItem>|null $update
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
     * The product variants to delete their association with inventory items.
     *
     * @return list<AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItem>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The product variants to delete their association with inventory items.
     *
     * @param list<AdminProductsIdVariantsInventoryItemsBatchPostBodyDeleteItem>|null $delete
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