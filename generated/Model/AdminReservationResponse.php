<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminReservationResponse extends \ArrayObject
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
     * The reservation's details.
     *
     * @var AdminReservation|null
     */
    protected $reservation;
    /**
     * The reservation's details.
     *
     * @return AdminReservation|null
     */
    public function getReservation(): ?AdminReservation
    {
        return $this->reservation;
    }
    /**
     * The reservation's details.
     *
     * @param AdminReservation|null $reservation
     *
     * @return self
     */
    public function setReservation(?AdminReservation $reservation): self
    {
        $this->initialized['reservation'] = true;
        $this->reservation = $reservation;
        return $this;
    }
}