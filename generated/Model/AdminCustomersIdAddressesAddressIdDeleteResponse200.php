<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCustomersIdAddressesAddressIdDeleteResponse200 extends \ArrayObject
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
     * The customer's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The name of the deleted object.
     *
     * @var string|null
     */
    protected $object;
    /**
     * Whether the Customer was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The customer's details.
     *
     * @var AdminCustomer|null
     */
    protected $parent;
    /**
     * The customer's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The customer's ID.
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
     * Whether the Customer was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the Customer was deleted.
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
     * The customer's details.
     *
     * @return AdminCustomer|null
     */
    public function getParent(): ?AdminCustomer
    {
        return $this->parent;
    }
    /**
     * The customer's details.
     *
     * @param AdminCustomer|null $parent
     *
     * @return self
     */
    public function setParent(?AdminCustomer $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}