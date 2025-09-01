<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateShipment extends \ArrayObject
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
     * The shipment's labels.
     *
     * @var list<AdminCreateShipmentLabelsItem>|null
     */
    protected $labels;
    /**
     * The shipment's labels.
     *
     * @return list<AdminCreateShipmentLabelsItem>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * The shipment's labels.
     *
     * @param list<AdminCreateShipmentLabelsItem>|null $labels
     *
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
}