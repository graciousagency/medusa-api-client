<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductCategoriesIdProductsPostBody extends \ArrayObject
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
     * The products to add.
     *
     * @var list<string>|null
     */
    protected $add;
    /**
     * The product to remove.
     *
     * @var list<string>|null
     */
    protected $remove;
    /**
     * The products to add.
     *
     * @return list<string>|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     * The products to add.
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
     * The product to remove.
     *
     * @return list<string>|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     * The product to remove.
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