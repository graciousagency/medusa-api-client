<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantInventoryBatchResponse extends \ArrayObject
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
     * 
     *
     * @var mixed|null
     */
    protected $created;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $updated;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $deleted;
    /**
     * 
     *
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param mixed $created
     *
     * @return self
     */
    public function setCreated($created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param mixed $updated
     *
     * @return self
     */
    public function setUpdated($updated): self
    {
        $this->initialized['updated'] = true;
        $this->updated = $updated;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param mixed $deleted
     *
     * @return self
     */
    public function setDeleted($deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}