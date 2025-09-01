<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminCreateApiKey extends \ArrayObject
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
     * The API key's title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The API key's type. Use `secret` for a user's API key; Use `publishable` for Publishable API keys.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The API key's title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * The API key's title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The API key's type. Use `secret` for a user's API key; Use `publishable` for Publishable API keys.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * The API key's type. Use `secret` for a user's API key; Use `publishable` for Publishable API keys.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}