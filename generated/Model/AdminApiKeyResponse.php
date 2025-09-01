<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminApiKeyResponse extends \ArrayObject
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
     * The API key's details.
     *
     * @var AdminApiKey|null
     */
    protected $apiKey;
    /**
     * The API key's details.
     *
     * @return AdminApiKey|null
     */
    public function getApiKey(): ?AdminApiKey
    {
        return $this->apiKey;
    }
    /**
     * The API key's details.
     *
     * @param AdminApiKey|null $apiKey
     *
     * @return self
     */
    public function setApiKey(?AdminApiKey $apiKey): self
    {
        $this->initialized['apiKey'] = true;
        $this->apiKey = $apiKey;
        return $this;
    }
}