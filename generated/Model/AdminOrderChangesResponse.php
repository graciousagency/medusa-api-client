<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderChangesResponse extends \ArrayObject
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
     * An order's changes.
     *
     * @var list<AdminOrderChange>|null
     */
    protected $orderChanges;
    /**
     * An order's changes.
     *
     * @return list<AdminOrderChange>|null
     */
    public function getOrderChanges(): ?array
    {
        return $this->orderChanges;
    }
    /**
     * An order's changes.
     *
     * @param list<AdminOrderChange>|null $orderChanges
     *
     * @return self
     */
    public function setOrderChanges(?array $orderChanges): self
    {
        $this->initialized['orderChanges'] = true;
        $this->orderChanges = $orderChanges;
        return $this;
    }
}