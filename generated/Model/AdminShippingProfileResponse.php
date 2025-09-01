<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminShippingProfileResponse extends \ArrayObject
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
     * The shipping profile's details..
     *
     * @var AdminShippingProfile|null
     */
    protected $shippingProfile;
    /**
     * The shipping profile's details..
     *
     * @return AdminShippingProfile|null
     */
    public function getShippingProfile(): ?AdminShippingProfile
    {
        return $this->shippingProfile;
    }
    /**
     * The shipping profile's details..
     *
     * @param AdminShippingProfile|null $shippingProfile
     *
     * @return self
     */
    public function setShippingProfile(?AdminShippingProfile $shippingProfile): self
    {
        $this->initialized['shippingProfile'] = true;
        $this->shippingProfile = $shippingProfile;
        return $this;
    }
}