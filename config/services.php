<?php

use Gracious\MedusaApiClientBundle\Factory\HttpClientFactory;
use Gracious\MedusaApiClientBundle\Factory\MedusaApiClientFactory;
use Gracious\MedusaApiClientBundle\Http\Plugin\HttpPluginCollection;
use Psr\Http\Client\ClientInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Gracious\MedusaApiClientBundle\Client;

return static function (ContainerConfigurator $configurator) {
    $parameters = $configurator->parameters();

    // Define parameters

    $services = $configurator->services();

    $services->set('gracious.integration.medusa.client.factory', MedusaApiClientFactory::class)
        ->autowire();

    $services->set('gracious.integration.medusa.http.plugin_collection.default', HttpPluginCollection::class);

    $services->set('gracious.integration.medusa.http.client.factory', HttpClientFactory::class)
        ->autowire();

    $services->set('gracious.integration.medusa.http.client.default', ClientInterface::class)
        ->factory([new Reference('gracious.integration.medusa.http.client.factory'), '__invoke']);

    $services->set('gracious.integration.medusa.client.default', Client::class)
        ->factory([new Reference('gracious.integration.medusa.client.factory'), '__invoke'])
        ->arg('$baseUri', '%env(MEDUSA_BASE_URI)%')
        ->arg('$apiKey', '%env(MEDUSA_API_KEY)%')
        ->arg('$pluginCollection', new Reference('gracious.integration.medusa.http.plugin_collection.default'))
        ->arg('$httpClient', new Reference('gracious.integration.medusa.http.client.default'));

    $services->alias(Client::class, new Reference('gracious.integration.medusa.client.default'));
};
