<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthAdminSessionResponse extends \ArrayObject
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
     * The user's details.
     *
     * @var AdminUser|null
     */
    protected $user;
    /**
     * The user's details.
     *
     * @return AdminUser|null
     */
    public function getUser(): ?AdminUser
    {
        return $this->user;
    }
    /**
     * The user's details.
     *
     * @param AdminUser|null $user
     *
     * @return self
     */
    public function setUser(?AdminUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}