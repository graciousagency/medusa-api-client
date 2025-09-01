<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductVariantInventoryLinkDeleteResponse extends \ArrayObject
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
     * The details of an association between a product variant and an inventory item.
     *
     * @var AdminProductVariantInventoryLink|null
     */
    protected $id;
    /**
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object = 'variant-inventory-item-link';
    /**
     * Whether the association was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The product variant's details.
     *
     * @var AdminProductVariant|null
     */
    protected $parent;
    /**
     * The details of an association between a product variant and an inventory item.
     *
     * @return AdminProductVariantInventoryLink|null
     */
    public function getId(): ?AdminProductVariantInventoryLink
    {
        return $this->id;
    }
    /**
     * The details of an association between a product variant and an inventory item.
     *
     * @param AdminProductVariantInventoryLink|null $id
     *
     * @return self
     */
    public function setId(?AdminProductVariantInventoryLink $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the deleted object.
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->object;
    }
    /**
     * The name of the deleted object.
     *
     * @param string|null $object
     *
     * @return self
     */
    public function setObject(?string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * Whether the association was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the association was deleted.
     *
     * @param bool|null $deleted
     *
     * @return self
     */
    public function setDeleted(?bool $deleted): self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
    /**
     * The product variant's details.
     *
     * @return AdminProductVariant|null
     */
    public function getParent(): ?AdminProductVariant
    {
        return $this->parent;
    }
    /**
     * The product variant's details.
     *
     * @param AdminProductVariant|null $parent
     *
     * @return self
     */
    public function setParent(?AdminProductVariant $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}