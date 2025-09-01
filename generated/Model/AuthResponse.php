<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthResponse extends \ArrayObject
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
     * The JWT token used for registration or authentication.
     *
     * @var string|null
     */
    protected $token;
    /**
     * The JWT token used for registration or authentication.
     *
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * The JWT token used for registration or authentication.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
}