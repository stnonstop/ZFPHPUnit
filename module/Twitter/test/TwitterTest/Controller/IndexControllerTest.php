<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 3.02.15
 * Time: 01:57
 */

namespace TwitterTest\Controller;


use Zend\Mvc\Controller\AbstractController;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase {

    public function setUp() {
        $this->setApplicationConfig(
            include '/Users/nevriyedurmaz/Project/ZendWork/ZendSkeletonApplication/config/application.config.php'
        );
        parent::setUp();
    }

}