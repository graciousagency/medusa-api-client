<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductTagResponse extends \ArrayObject
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
     * The product tag's details.
     *
     * @var AdminProductTag|null
     */
    protected $productTag;
    /**
     * The product tag's details.
     *
     * @return AdminProductTag|null
     */
    public function getProductTag(): ?AdminProductTag
    {
        return $this->productTag;
    }
    /**
     * The product tag's details.
     *
     * @param AdminProductTag|null $productTag
     *
     * @return self
     */
    public function setProductTag(?AdminProductTag $productTag): self
    {
        $this->initialized['productTag'] = true;
        $this->productTag = $productTag;
        return $this;
    }
}