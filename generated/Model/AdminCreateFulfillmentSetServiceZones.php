<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateFulfillmentSetServiceZones extends \ArrayObject
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
     * The service zone's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The service zone's geo zones.
     *
     * @var list<mixed>|null
     */
    protected $geoZones;
    /**
     * The service zone's name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * The service zone's name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The service zone's geo zones.
     *
     * @return list<mixed>|null
     */
    public function getGeoZones(): ?array
    {
        return $this->geoZones;
    }
    /**
     * The service zone's geo zones.
     *
     * @param list<mixed>|null $geoZones
     *
     * @return self
     */
    public function setGeoZones(?array $geoZones): self
    {
        $this->initialized['geoZones'] = true;
        $this->geoZones = $geoZones;
        return $this;
    }
}