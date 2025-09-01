<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductTypeResponse extends \ArrayObject
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
     * @var AdminProductType|null
     */
    protected $productType;
    /**
     * The product type's details.
     *
     * @return AdminProductType|null
     */
    public function getProductType(): ?AdminProductType
    {
        return $this->productType;
    }
    /**
     * The product type's details.
     *
     * @param AdminProductType|null $productType
     *
     * @return self
     */
    public function setProductType(?AdminProductType $productType): self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
}