<?php

namespace ContainerQzRir0v;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JncVs31Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JncVs31' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JncVs31'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'page' => ['privates', '.errored..service_locator.JncVs31.App\\Entity\\Pages', NULL, 'Cannot autowire service ".service_locator.JncVs31": it references class "App\\Entity\\Pages" but no such service exists.'],
        ], [
            'page' => 'App\\Entity\\Pages',
        ]);
    }
}
