<?php

namespace ContainerDZmfh40;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormuUsuarioService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FormuUsuario' shared autowired service.
     *
     * @return \App\Form\FormuUsuario
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FormuUsuario'] = new \App\Form\FormuUsuario();
    }
}
