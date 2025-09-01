<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPromotionsIdRulesBatchPostResponse200Deleted extends \ArrayObject
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
     * The IDs of the deleted rules.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * The name of the object that was deleted.
     *
     * @var string|null
     */
    protected $object = 'promotion-rule';
    /**
     * Whether the rules were deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The IDs of the deleted rules.
     *
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }
    /**
     * The IDs of the deleted rules.
     *
     * @param list<string>|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * The name of the object that was deleted.
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->object;
    }
    /**
     * The name of the object that was deleted.
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
     * Whether the rules were deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the rules were deleted.
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
}