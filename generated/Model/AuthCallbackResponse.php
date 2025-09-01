<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthCallbackResponse extends \ArrayObject
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
     * The location to redirect the user to for further authentication with the third-party provider.
     *
     * @var string|null
     */
    protected $location;
    /**
     * The location to redirect the user to for further authentication with the third-party provider.
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * The location to redirect the user to for further authentication with the third-party provider.
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
}