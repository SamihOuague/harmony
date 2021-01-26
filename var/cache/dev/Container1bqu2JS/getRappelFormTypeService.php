<?php

namespace Container1bqu2JS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRappelFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RappelFormType' shared autowired service.
     *
     * @return \App\Form\RappelFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RappelFormType.php';

        return $container->privates['App\\Form\\RappelFormType'] = new \App\Form\RappelFormType();
    }
}
