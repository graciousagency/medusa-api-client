<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminTaxRatesIdRulesRuleIdDeleteResponse200 extends \ArrayObject
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
     * The tax rate's ID.
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
     * Whether the Tax Rate was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The tax rate's details.
     *
     * @var AdminTaxRate|null
     */
    protected $parent;
    /**
     * The tax rate's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The tax rate's ID.
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
     * Whether the Tax Rate was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the Tax Rate was deleted.
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
     * The tax rate's details.
     *
     * @return AdminTaxRate|null
     */
    public function getParent(): ?AdminTaxRate
    {
        return $this->parent;
    }
    /**
     * The tax rate's details.
     *
     * @param AdminTaxRate|null $parent
     *
     * @return self
     */
    public function setParent(?AdminTaxRate $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}