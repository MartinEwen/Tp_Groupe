<?php

namespace ContainerHZVyIxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ag89WnJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ag89WnJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ag89WnJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'image' => ['privates', '.errored..service_locator.ag89WnJ.App\\Entity\\Images', NULL, 'Cannot autowire service ".service_locator.ag89WnJ": it references class "App\\Entity\\Images" but no such service exists.'],
        ], [
            'image' => 'App\\Entity\\Images',
        ]);
    }
}