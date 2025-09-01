<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminSalesChannelsIdProductsPostBody extends \ArrayObject
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
     * The products to add to the sales channel.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The products to remove from the sales channel.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The products to add to the sales channel.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The products to add to the sales channel.
     *
     * @param list<string>|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * The products to remove from the sales channel.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The products to remove from the sales channel.
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