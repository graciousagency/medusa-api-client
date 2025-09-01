<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminLinkPriceListProducts extends \ArrayObject
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
     * The products to remove from the price list.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The products to remove from the price list.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The products to remove from the price list.
     *
     * @param list<string>|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}