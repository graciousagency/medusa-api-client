<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminClaimReturnPreviewResponse extends \ArrayObject
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
     * The return's details.
     *
     * @var AdminReturn|null
     */
    protected $return;
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
     * The return's details.
     *
     * @return AdminReturn|null
     */
    public function getReturn(): ?AdminReturn
    {
        return $this->return;
    }
    /**
     * The return's details.
     *
     * @param AdminReturn|null $return
     *
     * @return self
     */
    public function setReturn(?AdminReturn $return): self
    {
        $this->initialized['return'] = true;
        $this->return = $return;
        return $this;
    }
}