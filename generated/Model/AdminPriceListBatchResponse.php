<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPriceListBatchResponse extends \ArrayObject
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
     * The created prices.
     *
     * @var list<AdminPrice>|null
     */
    protected $created;
    /**
     * The updated prices.
     *
     * @var list<AdminPrice>|null
     */
    protected $updated;
    /**
     * The details of the deleted prices.
     *
     * @var AdminPriceListBatchResponseDeleted|null
     */
    protected $deleted;
    /**
     * The created prices.
     *
     * @return list<AdminPrice>|null
     */
    public function getCreated(): ?array
    {
        return $this->created;
    }
    /**
     * The created prices.
     *
     * @param list<AdminPrice>|null $created
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
     * The updated prices.
     *
     * @return list<AdminPrice>|null
     */
    public function getUpdated(): ?array
    {
        return $this->updated;
    }
    /**
     * The updated prices.
     *
     * @param list<AdminPrice>|null $updated
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
     * The details of the deleted prices.
     *
     * @return AdminPriceListBatchResponseDeleted|null
     */
    public function getDeleted(): ?AdminPriceListBatchResponseDeleted
    {
        return $this->deleted;
    }
    /**
     * The details of the deleted prices.
     *
     * @param AdminPriceListBatchResponseDeleted|null $deleted
     *
     * @return self
     */
    public function setDeleted(?AdminPriceListBatchResponseDeleted $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}