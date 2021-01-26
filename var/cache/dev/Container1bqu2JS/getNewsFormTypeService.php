<?php

namespace Container1bqu2JS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NewsFormType' shared autowired service.
     *
     * @return \App\Form\NewsFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NewsFormType.php';

        return $container->privates['App\\Form\\NewsFormType'] = new \App\Form\NewsFormType();
    }
}