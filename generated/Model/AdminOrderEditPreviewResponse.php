<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderEditPreviewResponse extends \ArrayObject
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
}