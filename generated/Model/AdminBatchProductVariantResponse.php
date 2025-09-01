<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchProductVariantResponse extends \ArrayObject
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
     * The created product variants.
     *
     * @var list<AdminProductVariant>|null
     */
    protected $created;
    /**
     * The updated product variants.
     *
     * @var list<AdminProductVariant>|null
     */
    protected $updated;
    /**
     * The details of the deleted product variants.
     *
     * @var AdminBatchProductVariantResponseDeleted|null
     */
    protected $deleted;
    /**
     * The created product variants.
     *
     * @return list<AdminProductVariant>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created product variants.
     *
     * @param list<AdminProductVariant>|null $created
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
     * The updated product variants.
     *
     * @return list<AdminProductVariant>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated product variants.
     *
     * @param list<AdminProductVariant>|null $updated
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
     * The details of the deleted product variants.
     *
     * @return AdminBatchProductVariantResponseDeleted|null
     */
    public function getDeleted(): ?AdminBatchProductVariantResponseDeleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted product variants.
     *
     * @param AdminBatchProductVariantResponseDeleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminBatchProductVariantResponseDeleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}