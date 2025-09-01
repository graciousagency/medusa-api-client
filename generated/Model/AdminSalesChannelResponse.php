<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminSalesChannelResponse extends \ArrayObject
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
     * The sales channel's details.
     *
     * @var AdminSalesChannel|null
     */
    protected $salesChannel;
    /**
     * The sales channel's details.
     *
     * @return AdminSalesChannel|null
     */
    public function getSalesChannel(): ?AdminSalesChannel
    {
        return $this->salesChannel;
    }
    /**
     * The sales channel's details.
     *
     * @param AdminSalesChannel|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?AdminSalesChannel $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
}