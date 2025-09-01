<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthSessionDeleteResponse200 extends \ArrayObject
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
     * Whether the session was deleted successfully.
     *
     * @var bool|null
     */
    protected $success;
    /**
     * Whether the session was deleted successfully.
     *
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Whether the session was deleted successfully.
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}