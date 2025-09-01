<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminServiceZoneResponse extends \ArrayObject
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
     * The shipping option's service zone.
     *
     * @var AdminServiceZone|null
     */
    protected $serviceZone;
    /**
     * The shipping option's service zone.
     *
     * @return AdminServiceZone|null
     */
    public function getServiceZone(): ?AdminServiceZone
    {
        return $this->serviceZone;
    }
    /**
     * The shipping option's service zone.
     *
     * @param AdminServiceZone|null $serviceZone
     *
     * @return self
     */
    public function setServiceZone(?AdminServiceZone $serviceZone): self
    {
        $this->initialized['serviceZone'] = true;
        $this->serviceZone = $serviceZone;
        return $this;
    }
}