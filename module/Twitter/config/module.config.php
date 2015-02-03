<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 2.02.15
 * Time: 22:45
 */

return array(
    'router' => array(
        'routes' => array(
            'twitter' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/twitter',
                    'defaults' => array(
                        'controller' => 'Twitter\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Twitter\Controller\Index' => 'Twitter\Controller\IndexController'
        ),
    ),
    'twitter_config' => array(
        'access_token' => array(
            'token'  => '142581510-RMwIi2gp7LdjvNSqR6vfVrMkn0V9OScwXayZZYHB',
            'secret' => 'msFxKLDFdDGOeXl9y5Fj3KGTTXiQfHWHeW7CyLVtn7Auy',
        ),
        'oauth_options' => array(
            'consumerKey' => 'vm0d2XI4MQV279JuidZ5QBkfT',
            'consumerSecret' => 'oCX1ReTpmGkovDxkR0DvqMSJ15X8Ykon8R9JGupB8Ut8NwUm7Z',
        ),
        'http_client_options' => array(
            'adapter' => 'Zend\Http\Client\Adapter\Curl',
            'curloptions' => array(
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'twitter' => 'Twitter\Factory\TwitterServiceFactory',
        ),
    ),
);