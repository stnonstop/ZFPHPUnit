<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 2.02.15
 * Time: 22:47
 */

namespace Twitter\Factory;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZendService\Twitter\Twitter;

class TwitterServiceFactory implements FactoryInterface {

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $config = $serviceLocator->get('Config');

        //var_dump($config);
        //var_dump($serviceLocator);

        //var_dump($config['twitter_config']);

        //die("Heyoo");

        return new Twitter($config['twitter_config']);

    }
}