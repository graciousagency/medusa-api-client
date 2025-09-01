<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderItemHistory extends \ArrayObject
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
     * The version changes of the item.
     *
     * @var AdminOrderItemHistoryVersion|null
     */
    protected $version;
    /**
     * The version changes of the item.
     *
     * @return AdminOrderItemHistoryVersion|null
     */
    public function getVersion(): ?AdminOrderItemHistoryVersion
    {
        return $this->version;
    }
    /**
     * The version changes of the item.
     *
     * @param AdminOrderItemHistoryVersion|null $version
     *
     * @return self
     */
    public function setVersion(?AdminOrderItemHistoryVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}