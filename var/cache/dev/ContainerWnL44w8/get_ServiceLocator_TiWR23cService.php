<?php

namespace ContainerWnL44w8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TiWR23cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TiWR23c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TiWR23c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DashboardController::editProgramme' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\DashboardController::programme' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\DashboardController::saveImg' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\HomeController::importLead' => ['privates', '.service_locator.zvIpLOp', 'get_ServiceLocator_ZvIpLOpService', true],
            'App\\Controller\\NewsController::createArticle' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\NewsController::saveImg' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\PageController::new' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.5YF.0Kc', 'get_ServiceLocator_5YF_0KcService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\DashboardController:editProgramme' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\DashboardController:programme' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\DashboardController:saveImg' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\HomeController:importLead' => ['privates', '.service_locator.zvIpLOp', 'get_ServiceLocator_ZvIpLOpService', true],
            'App\\Controller\\NewsController:createArticle' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\NewsController:saveImg' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\PageController:new' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.5YF.0Kc', 'get_ServiceLocator_5YF_0KcService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\DashboardController::editProgramme' => '?',
            'App\\Controller\\DashboardController::programme' => '?',
            'App\\Controller\\DashboardController::saveImg' => '?',
            'App\\Controller\\HomeController::importLead' => '?',
            'App\\Controller\\NewsController::createArticle' => '?',
            'App\\Controller\\NewsController::saveImg' => '?',
            'App\\Controller\\PageController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\DashboardController:editProgramme' => '?',
            'App\\Controller\\DashboardController:programme' => '?',
            'App\\Controller\\DashboardController:saveImg' => '?',
            'App\\Controller\\HomeController:importLead' => '?',
            'App\\Controller\\NewsController:createArticle' => '?',
            'App\\Controller\\NewsController:saveImg' => '?',
            'App\\Controller\\PageController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
