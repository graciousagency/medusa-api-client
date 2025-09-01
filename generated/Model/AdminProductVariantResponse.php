<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantResponse extends \ArrayObject
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
     * The product variant's details.
     *
     * @var AdminProductVariant|null
     */
    protected $variant;
    /**
     * The product variant's details.
     *
     * @return AdminProductVariant|null
     */
    public function getVariant(): ?AdminProductVariant
    {
        return $this->variant;
    }
    /**
     * The product variant's details.
     *
     * @param AdminProductVariant|null $variant
     *
     * @return self
     */
    public function setVariant(?AdminProductVariant $variant): self
    {
        $this->initialized['variant'] = true;
        $this->variant = $variant;
        return $this;
    }
}