<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantInventoryLink extends \ArrayObject
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
     * @var AdminProductVariantInventoryLinkProduct|null
     */
    protected $product;
    /**
     * The inventory item's details.
     *
     * @var AdminProductVariantInventoryLinkInventory|null
     */
    protected $inventory;
    /**
     * The product variant's details.
     *
     * @return AdminProductVariantInventoryLinkProduct|null
     */
    public function getProduct(): ?AdminProductVariantInventoryLinkProduct
    {
        return $this->product;
    }
    /**
     * The product variant's details.
     *
     * @param AdminProductVariantInventoryLinkProduct|null $product
     *
     * @return self
     */
    public function setProduct(?AdminProductVariantInventoryLinkProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * The inventory item's details.
     *
     * @return AdminProductVariantInventoryLinkInventory|null
     */
    public function getInventory(): ?AdminProductVariantInventoryLinkInventory
    {
        return $this->inventory;
    }
    /**
     * The inventory item's details.
     *
     * @param AdminProductVariantInventoryLinkInventory|null $inventory
     *
     * @return self
     */
    public function setInventory(?AdminProductVariantInventoryLinkInventory $inventory): self
    {
        $this->initialized['inventory'] = true;
        $this->inventory = $inventory;
        return $this;
    }
}