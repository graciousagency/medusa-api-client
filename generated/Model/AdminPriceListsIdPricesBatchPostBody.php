<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPriceListsIdPricesBatchPostBody extends \ArrayObject
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
     * The prices to create.
     *
     * @var list<AdminPriceListsIdPricesBatchPostBodyCreateItem>|null
     */
    protected $create;
    /**
     * The prices to update.
     *
     * @var list<AdminPriceListsIdPricesBatchPostBodyUpdateItem>|null
     */
    protected $update;
    /**
     * The prices to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * The prices to create.
     *
     * @return list<AdminPriceListsIdPricesBatchPostBodyCreateItem>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The prices to create.
     *
     * @param list<AdminPriceListsIdPricesBatchPostBodyCreateItem>|null $create
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
     * The prices to update.
     *
     * @return list<AdminPriceListsIdPricesBatchPostBodyUpdateItem>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The prices to update.
     *
     * @param list<AdminPriceListsIdPricesBatchPostBodyUpdateItem>|null $update
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
     * The prices to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The prices to delete.
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