<?php

namespace ContainerQzRir0v;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MHNuZusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mHNuZus' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mHNuZus'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'imagesRepository' => ['privates', 'App\\Repository\\ImagesRepository', 'getImagesRepositoryService', true],
        ], [
            'imagesRepository' => 'App\\Repository\\ImagesRepository',
        ]);
    }
}
