<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 15.12.14
 * Time: 20:39
 */

namespace Debug\Factory;


use Debug\Service\TimerService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TimerServiceFactory implements  FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $timer = new TimerService(true);
        return $timer;
    }
}