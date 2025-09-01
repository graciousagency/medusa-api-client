<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminBatchProductResponse extends \ArrayObject
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
     * The created products
     *
     * @var list<AdminProduct>|null
     */
    protected $created;
    /**
     * The updated products.
     *
     * @var list<AdminProduct>|null
     */
    protected $updated;
    /**
     * The deleted products' details.
     *
     * @var AdminBatchProductResponseDeleted|null
     */
    protected $deleted;
    /**
     * The created products
     *
     * @return list<AdminProduct>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created products
     *
     * @param list<AdminProduct>|null $created
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
     * The updated products.
     *
     * @return list<AdminProduct>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated products.
     *
     * @param list<AdminProduct>|null $updated
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
     * The deleted products' details.
     *
     * @return AdminBatchProductResponseDeleted|null
     */
    public function getDeleted(): ?AdminBatchProductResponseDeleted
    {
        return $this->deleted;
    }
    /**
     * The deleted products' details.
     *
     * @param AdminBatchProductResponseDeleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminBatchProductResponseDeleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}