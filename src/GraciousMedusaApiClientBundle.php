<?php
namespace Gracious\MedusaApiClientBundle;

use Gracious\MedusaApiClientBundle\DependencyInjection\CompilerPass\HttpPluginCollectionPass;
use Gracious\MedusaApiClientBundle\DependencyInjection\GraciousMedusaApiClientExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class GraciousMedusaApiClientBundle extends AbstractBundle
{
    public function getContainerExtension(): GraciousMedusaApiClientExtension
    {
        return new GraciousMedusaApiClientExtension();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new HttpPluginCollectionPass());
    }
}
