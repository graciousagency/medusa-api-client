<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPriceListBatchResponseDeleted extends \ArrayObject
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
     * The IDs of the deleted prices.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object = 'price';
    /**
     * Whether the prices were deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The IDs of the deleted prices.
     *
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }
    /**
     * The IDs of the deleted prices.
     *
     * @param list<string>|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
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
     * Whether the prices were deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the prices were deleted.
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
}