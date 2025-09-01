<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminOrderItemHistoryVersion extends \ArrayObject
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
     * The original version.
     *
     * @var float|null
     */
    protected $from;
    /**
     * The new version.
     *
     * @var float|null
     */
    protected $to;
    /**
     * The original version.
     *
     * @return float|null
     */
    public function getFrom(): ?float
    {
        return $this->from;
    }
    /**
     * The original version.
     *
     * @param float|null $from
     *
     * @return self
     */
    public function setFrom(?float $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * The new version.
     *
     * @return float|null
     */
    public function getTo(): ?float
    {
        return $this->to;
    }
    /**
     * The new version.
     *
     * @param float|null $to
     *
     * @return self
     */
    public function setTo(?float $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}