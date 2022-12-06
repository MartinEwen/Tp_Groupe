<?php

namespace ContainerHZVyIxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UCQHI_FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uCQHI.f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uCQHI.f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'page' => ['privates', '.errored..service_locator.uCQHI.f.App\\Entity\\Pages', NULL, 'Cannot autowire service ".service_locator.uCQHI.f": it references class "App\\Entity\\Pages" but no such service exists.'],
            'pagesRepository' => ['privates', 'App\\Repository\\PagesRepository', 'getPagesRepositoryService', true],
        ], [
            'page' => 'App\\Entity\\Pages',
            'pagesRepository' => 'App\\Repository\\PagesRepository',
        ]);
    }
}
