<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchProductRequest extends \ArrayObject
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
     * The products to create.
     *
     * @var list<AdminCreateProduct>|null
     */
    protected $create;
    /**
     * The products to update.
     *
     * @var list<AdminBatchUpdateProduct>|null
     */
    protected $update;
    /**
     * The products to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * The products to create.
     *
     * @return list<AdminCreateProduct>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The products to create.
     *
     * @param list<AdminCreateProduct>|null $create
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
     * The products to update.
     *
     * @return list<AdminBatchUpdateProduct>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The products to update.
     *
     * @param list<AdminBatchUpdateProduct>|null $update
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
     * The products to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The products to delete.
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