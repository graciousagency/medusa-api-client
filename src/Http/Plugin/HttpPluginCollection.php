<?php

namespace Gracious\MedusaApiClientBundle\Http\Plugin;

use Http\Client\Common\Plugin;

class HttpPluginCollection
{
    private array $plugins = [];

    public function addPlugin(Plugin $plugin): void
    {
        $this->plugins[] = $plugin;
    }

    /**
     * @return array
     */
    public function getPlugins(): array
    {
        return $this->plugins;
    }
}
