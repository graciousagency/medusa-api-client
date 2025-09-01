<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderPreviewResponse extends \ArrayObject
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
    protected $order;
    /**
     * A preview of an order if a change, such as exchange, return, edit, or claim is applied on it.
     *
     * @return AdminOrderPreview|null
     */
    public function getOrder(): ?AdminOrderPreview
    {
        return $this->order;
    }
    /**
     * A preview of an order if a change, such as exchange, return, edit, or claim is applied on it.
     *
     * @param AdminOrderPreview|null $order
     *
     * @return self
     */
    public function setOrder(?AdminOrderPreview $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}