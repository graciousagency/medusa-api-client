<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductCategoryResponse extends \ArrayObject
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
     * The category's details.
     *
     * @var StoreProductCategory|null
     */
    protected $productCategory;
    /**
     * The category's details.
     *
     * @return StoreProductCategory|null
     */
    public function getProductCategory(): ?StoreProductCategory
    {
        return $this->productCategory;
    }
    /**
     * The category's details.
     *
     * @param StoreProductCategory|null $productCategory
     *
     * @return self
     */
    public function setProductCategory(?StoreProductCategory $productCategory): self
    {
        $this->initialized['productCategory'] = true;
        $this->productCategory = $productCategory;
        return $this;
    }
}