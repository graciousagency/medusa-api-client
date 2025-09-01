<?php

namespace Gracious\MedusaApiClientBundle\Factory;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Message\Authentication\BasicAuth;
use Nyholm\Psr7\Uri;
use Gracious\MedusaApiClientBundle\Client;
use Gracious\MedusaApiClientBundle\Http\Plugin\HttpPluginCollection;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Psr\Http\Client\ClientInterface;

readonly class MedusaApiClientFactory
{
    public function __construct(
    ) {
    }

    public function __invoke(string $baseUri, string $apiKey, HttpPluginCollection $pluginCollection, ClientInterface $httpClient): Client
    {
        /** @var array<Plugin> $plugins */
        $plugins = [
            new BaseUriPlugin(new Uri($baseUri)),
            new AuthenticationPlugin(new BasicAuth($apiKey, '')),
        ];

        $httpClient = new PluginClient($httpClient, [ ...$plugins, ...$pluginCollection->getPlugins() ]);

        return Client::create(httpClient: $httpClient);
    }
}
