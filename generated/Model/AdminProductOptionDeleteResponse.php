<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminProductOptionDeleteResponse extends \ArrayObject
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
     * The product option's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object = 'product_option';
    /**
     * Whether the product option was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The product's details.
     *
     * @var AdminProduct|null
     */
    protected $parent;
    /**
     * The product option's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The product option's ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
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
     * Whether the product option was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the product option was deleted.
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
     * The product's details.
     *
     * @return AdminProduct|null
     */
    public function getParent(): ?AdminProduct
    {
        return $this->parent;
    }
    /**
     * The product's details.
     *
     * @param AdminProduct|null $parent
     *
     * @return self
     */
    public function setParent(?AdminProduct $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}