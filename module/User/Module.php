<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 16.12.14
 * Time: 01:29
 */

namespace User;


class Module {

    public function onBootstrap(MvcEvent $event) {

    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
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