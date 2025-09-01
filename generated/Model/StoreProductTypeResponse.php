<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductTypeResponse extends \ArrayObject
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
     * The product type's details.
     *
     * @var StoreProductType|null
     */
    protected $productType;
    /**
     * The product type's details.
     *
     * @return StoreProductType|null
     */
    public function getProductType(): ?StoreProductType
    {
        return $this->productType;
    }
    /**
     * The product type's details.
     *
     * @param StoreProductType|null $productType
     *
     * @return self
     */
    public function setProductType(?StoreProductType $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
}