<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductOptionResponse extends \ArrayObject
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
     * The product option's details.
     *
     * @var AdminProductOption|null
     */
    protected $productOption;
    /**
     * The product option's details.
     *
     * @return AdminProductOption|null
     */
    public function getProductOption(): ?AdminProductOption
    {
        return $this->productOption;
    }
    /**
     * The product option's details.
     *
     * @param AdminProductOption|null $productOption
     *
     * @return self
     */
    public function setProductOption(?AdminProductOption $productOption): self
    {
        $this->initialized['productOption'] = true;
        $this->productOption = $productOption;
        return $this;
    }
}