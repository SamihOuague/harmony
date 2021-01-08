<?php

namespace ContainerSI7Majg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSluggerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'slugger' shared service.
     *
     * @return \Symfony\Component\String\Slugger\AsciiSlugger
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en');
    }
}
