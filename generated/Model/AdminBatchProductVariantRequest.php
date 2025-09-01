<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchProductVariantRequest extends \ArrayObject
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
     * The product variants to create.
     *
     * @var list<AdminCreateProductVariant>|null
     */
    protected $create;
    /**
     * The product variants to update.
     *
     * @var list<AdminBatchUpdateProductVariant>|null
     */
    protected $update;
    /**
     * The product variants to delete.
     *
     * @var list<string>|null
     */
    protected $delete;
    /**
     * The product variants to create.
     *
     * @return list<AdminCreateProductVariant>|null
     */
    public function getCreate(): ?array
    {
        return $this->create;
    }
    /**
     * The product variants to create.
     *
     * @param list<AdminCreateProductVariant>|null $create
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
     * The product variants to update.
     *
     * @return list<AdminBatchUpdateProductVariant>|null
     */
    public function getUpdate(): ?array
    {
        return $this->update;
    }
    /**
     * The product variants to update.
     *
     * @param list<AdminBatchUpdateProductVariant>|null $update
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
     * The product variants to delete.
     *
     * @return list<string>|null
     */
    public function getDelete(): ?array
    {
        return $this->delete;
    }
    /**
     * The product variants to delete.
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