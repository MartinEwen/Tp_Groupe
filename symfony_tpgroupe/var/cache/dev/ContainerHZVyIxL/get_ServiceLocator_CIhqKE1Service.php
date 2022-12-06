<?php

namespace ContainerHZVyIxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CIhqKE1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cIhqKE1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cIhqKE1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'content' => ['privates', '.errored..service_locator.cIhqKE1.App\\Entity\\Contents', NULL, 'Cannot autowire service ".service_locator.cIhqKE1": it references class "App\\Entity\\Contents" but no such service exists.'],
            'image' => ['privates', '.errored..service_locator.cIhqKE1.App\\Entity\\Images', NULL, 'Cannot autowire service ".service_locator.cIhqKE1": it references class "App\\Entity\\Images" but no such service exists.'],
            'page' => ['privates', '.errored..service_locator.cIhqKE1.App\\Entity\\Pages', NULL, 'Cannot autowire service ".service_locator.cIhqKE1": it references class "App\\Entity\\Pages" but no such service exists.'],
        ], [
            'content' => 'App\\Entity\\Contents',
            'image' => 'App\\Entity\\Images',
            'page' => 'App\\Entity\\Pages',
        ]);
    }
}