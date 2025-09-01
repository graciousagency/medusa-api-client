<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductResponse extends \ArrayObject
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
     * @var AdminProduct|null
     */
    protected $product;
    /**
     * The product's details.
     *
     * @return AdminProduct|null
     */
    public function getProduct(): ?AdminProduct
    {
        return $this->product;
    }
    /**
     * The product's details.
     *
     * @param AdminProduct|null $product
     *
     * @return self
     */
    public function setProduct(?AdminProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}