<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminInviteResponse extends \ArrayObject
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
     * The invite's details.
     *
     * @var AdminInvite|null
     */
    protected $invite;
    /**
     * The invite's details.
     *
     * @return AdminInvite|null
     */
    public function getInvite(): ?AdminInvite
    {
        return $this->invite;
    }
    /**
     * The invite's details.
     *
     * @param AdminInvite|null $invite
     *
     * @return self
     */
    public function setInvite(?AdminInvite $invite): self
    {
        $this->initialized['invite'] = true;
        $this->invite = $invite;
        return $this;
    }
}