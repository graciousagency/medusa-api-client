<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCampaignsIdDeleteResponse200 extends \ArrayObject
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
     * The campaign's ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The name of the object that was deleted.
     *
     * @var string|null
     */
    protected $object = 'campaign';
    /**
     * Whether the campaign was deleted.
     *
     * @var bool|null
     */
    protected $deleted;
    /**
     * The campaign's ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * The campaign's ID.
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
     * Whether the campaign was deleted.
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }
    /**
     * Whether the campaign was deleted.
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