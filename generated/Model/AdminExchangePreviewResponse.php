<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminExchangePreviewResponse extends \ArrayObject
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
     * The exchange's details.
     *
     * @var AdminExchange|null
     */
    protected $exchange;
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
     * The exchange's details.
     *
     * @return AdminExchange|null
     */
    public function getExchange(): ?AdminExchange
    {
        return $this->exchange;
    }
    /**
     * The exchange's details.
     *
     * @param AdminExchange|null $exchange
     *
     * @return self
     */
    public function setExchange(?AdminExchange $exchange): self
    {
        $this->initialized['exchange'] = true;
        $this->exchange = $exchange;
        return $this;
    }
}