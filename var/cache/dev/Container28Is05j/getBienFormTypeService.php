<?php

namespace Container28Is05j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBienFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\BienFormType' shared autowired service.
     *
     * @return \App\Form\BienFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/BienFormType.php';

        return $container->privates['App\\Form\\BienFormType'] = new \App\Form\BienFormType();
    }
}
