<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AuthUserAuthProviderUpdatePostResponse200 extends \ArrayObject
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
     * Whether the password was reset successfully.
     *
     * @var bool|null
     */
    protected $success;
    /**
     * Whether the password was reset successfully.
     *
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Whether the password was reset successfully.
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