<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 15.12.14
 * Time: 19:43
 */

namespace Debug;


use Zend\Mvc\MvcEvent;

class Module {

    public function onBootstrap(MvcEvent $event) {
        $eventManager = $event->getApplication()->getEventManager();

        $eventManager->attach(MvcEvent::EVENT_ROUTE, array($this, 'preTime'), 2);
        $eventManager->attach(MvcEvent::EVENT_ROUTE, array($this, 'postTime'), 0);

        $eventManager->attach(MvcEvent::EVENT_DISPATCH, array($this, 'preTime'), 2);
        $eventManager->attach(MvcEvent::EVENT_DISPATCH, array($this, 'postTime'), 0);

        $eventManager->attach(MvcEvent::EVENT_RENDER, array($this, 'preTime'), 2);
        $eventManager->attach(MvcEvent::EVENT_RENDER, array($this, 'postTime'), 0);

        $eventManager->attach(MvcEvent::EVENT_FINISH, array($this, 'preTime'), 2);
        $eventManager->attach(MvcEvent::EVENT_FINISH, array($this, 'postTime'), 0);


    }

    public function preTime(MvcEvent $event){
        $timer = $event->getApplication()->getServiceManager()->get('timer-float');
        $timer->start($event->getName());
    }

    public function postTime(MvcEvent $event){
        $timer = $event->getApplication()->getServiceManager()->get('timer-float');
        error_log($event->getName().' Time : '.sprintf('%f', $timer->stop($event->getName())));
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