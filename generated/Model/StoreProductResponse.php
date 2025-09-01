<?php

namespace Gracious\MedusaApiClientBundle\Model;

class StoreProductResponse extends \ArrayObject
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
     * The product's details.
     *
     * @var StoreProduct|null
     */
    protected $product;
    /**
     * The product's details.
     *
     * @return StoreProduct|null
     */
    public function getProduct(): ?StoreProduct
    {
        return $this->product;
    }
    /**
     * The product's details.
     *
     * @param StoreProduct|null $product
     *
     * @return self
     */
    public function setProduct(?StoreProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}