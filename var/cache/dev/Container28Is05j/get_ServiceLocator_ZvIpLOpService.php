<?php

namespace Container28Is05j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZvIpLOpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zvIpLOp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zvIpLOp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.zvIpLOp.App\\Entity\\Prospect', NULL, 'Cannot autowire service ".service_locator.zvIpLOp": it references class "App\\Entity\\Prospect" but no such service exists.'],
        ], [
            'data' => 'App\\Entity\\Prospect',
        ]);
    }
}