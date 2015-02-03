<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 2.02.15
 * Time: 22:42
 */

namespace Twitter;


use Zend\Mvc\MvcEvent;

class Module {

    public function onBootstrap(MvcEvent $event){

    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return include __DIR__ . '/config/service.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}