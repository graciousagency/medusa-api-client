<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminClaimPreviewResponse extends \ArrayObject
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
     * A preview of an order if a change, such as exchange, return, edit, or claim is applied on it.
     *
     * @var AdminOrderPreview|null
     */
    protected $orderPreview;
    /**
     * The claim's details.
     *
     * @var AdminClaim|null
     */
    protected $claim;
    /**
     * A preview of an order if a change, such as exchange, return, edit, or claim is applied on it.
     *
     * @return AdminOrderPreview|null
     */
    public function getOrderPreview(): ?AdminOrderPreview
    {
        return $this->orderPreview;
    }
    /**
     * A preview of an order if a change, such as exchange, return, edit, or claim is applied on it.
     *
     * @param AdminOrderPreview|null $orderPreview
     *
     * @return self
     */
    public function setOrderPreview(?AdminOrderPreview $orderPreview): self
    {
        $this->initialized['orderPreview'] = true;
        $this->orderPreview = $orderPreview;
        return $this;
    }
    /**
     * The claim's details.
     *
     * @return AdminClaim|null
     */
    public function getClaim(): ?AdminClaim
    {
        return $this->claim;
    }
    /**
     * The claim's details.
     *
     * @param AdminClaim|null $claim
     *
     * @return self
     */
    public function setClaim(?AdminClaim $claim): self
    {
        $this->initialized['claim'] = true;
        $this->claim = $claim;
        return $this;
    }
}