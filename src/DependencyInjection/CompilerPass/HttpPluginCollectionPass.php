<?php

namespace Gracious\MedusaApiClientBundle\DependencyInjection\CompilerPass;

use Gracious\MedusaApiClientBundle\Http\Plugin\HttpPluginCollection;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class HttpPluginCollectionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->has('gracious.integration.medusa.http.plugin_collection.default')) {
            return;
        }

        $definition = $container->findDefinition('gracious.integration.medusa.http.plugin_collection.default');

        $taggedServices = $container->findTaggedServiceIds('gracious.integration.medusa.http.plugin');

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('addPlugin', [new Reference($id)]);
        }
    }
}
