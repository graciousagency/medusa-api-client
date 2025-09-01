<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminDraftOrderResponse extends \ArrayObject
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
     * The draft order's details.
     *
     * @var AdminDraftOrder|null
     */
    protected $draftOrder;
    /**
     * The draft order's details.
     *
     * @return AdminDraftOrder|null
     */
    public function getDraftOrder(): ?AdminDraftOrder
    {
        return $this->draftOrder;
    }
    /**
     * The draft order's details.
     *
     * @param AdminDraftOrder|null $draftOrder
     *
     * @return self
     */
    public function setDraftOrder(?AdminDraftOrder $draftOrder): self
    {
        $this->initialized['draftOrder'] = true;
        $this->draftOrder = $draftOrder;
        return $this;
    }
}