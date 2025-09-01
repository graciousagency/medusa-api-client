<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductCategoryResponse extends \ArrayObject
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
     * The product category's details.
     *
     * @var AdminProductCategory|null
     */
    protected $productCategory;
    /**
     * The product category's details.
     *
     * @return AdminProductCategory|null
     */
    public function getProductCategory(): ?AdminProductCategory
    {
        return $this->productCategory;
    }
    /**
     * The product category's details.
     *
     * @param AdminProductCategory|null $productCategory
     *
     * @return self
     */
    public function setProductCategory(?AdminProductCategory $productCategory): self
    {
        $this->initialized['productCategory'] = true;
        $this->productCategory = $productCategory;
        return $this;
    }
}