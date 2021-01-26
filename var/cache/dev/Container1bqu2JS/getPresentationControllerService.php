<?php

namespace Container1bqu2JS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPresentationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PresentationController' shared autowired service.
     *
     * @return \App\Controller\PresentationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PresentationController.php';

        $container->services['App\\Controller\\PresentationController'] = $instance = new \App\Controller\PresentationController(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\PresentationController', $container));

        return $instance;
    }
}
