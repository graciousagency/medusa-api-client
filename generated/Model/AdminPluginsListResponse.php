<?php

namespace Gracious\MedusaApiClientBundle\Model;

class AdminPluginsListResponse extends \ArrayObject
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
     * The list of plugins.
     *
     * @var list<AdminPlugin>|null
     */
    protected $plugins;
    /**
     * The list of plugins.
     *
     * @return list<AdminPlugin>|null
     */
    public function getPlugins(): ?array
    {
        return $this->plugins;
    }
    /**
     * The list of plugins.
     *
     * @param list<AdminPlugin>|null $plugins
     *
     * @return self
     */
    public function setPlugins(?array $plugins): self
    {
        $this->initialized['plugins'] = true;
        $this->plugins = $plugins;
        return $this;
    }
}