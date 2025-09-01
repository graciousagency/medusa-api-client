<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminRevokeApiKey extends \ArrayObject
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
     * The time in seconds to revoke the API key after. If not set, the API key is revoked immediately.
     *
     * @var float|null
     */
    protected $revokeIn;
    /**
     * The time in seconds to revoke the API key after. If not set, the API key is revoked immediately.
     *
     * @return float|null
     */
    public function getRevokeIn(): ?float
    {
        return $this->revokeIn;
    }
    /**
     * The time in seconds to revoke the API key after. If not set, the API key is revoked immediately.
     *
     * @param float|null $revokeIn
     *
     * @return self
     */
    public function setRevokeIn(?float $revokeIn): self
    {
        $this->initialized['revokeIn'] = true;
        $this->revokeIn = $revokeIn;
        return $this;
    }
}