<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductTagResponse extends \ArrayObject
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
     * The tag's details.
     *
     * @var StoreProductTag|null
     */
    protected $productTag;
    /**
     * The tag's details.
     *
     * @return StoreProductTag|null
     */
    public function getProductTag(): ?StoreProductTag
    {
        return $this->productTag;
    }
    /**
     * The tag's details.
     *
     * @param StoreProductTag|null $productTag
     *
     * @return self
     */
    public function setProductTag(?StoreProductTag $productTag): self
    {
        $this->initialized['productTag'] = true;
        $this->productTag = $productTag;
        return $this;
    }
}