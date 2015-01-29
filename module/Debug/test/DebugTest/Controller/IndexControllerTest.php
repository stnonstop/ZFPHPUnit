<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 16.12.14
 * Time: 01:43
 */

namespace DebugTest\Controller;


use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase {

    public function setUp() {
        $this->setApplicationConfig(
            include '/Users/nevriyedurmaz/Project/ZendWork/ZendSkeletonApplication/config/application.config.php'
        );
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed() {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('home');
    }

    public function testIndexActionCanbeAccessedByApplication(){
        $this->dispatch('/application');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('application');
    }

    public function testIndexActionCanbeAccessedByApplicationIndex(){
        $this->dispatch('/application/index');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('application/default');
    }

    public function testAboutActionCanbeAccessedByApplicationAbout(){
        $this->dispatch('/application/index/about');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertActionName('about');
        $this->assertMatchedRouteName('application/default');
    }

    public function testAboutActionCanbeAccessedByAbout(){
        $this->dispatch('/about');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Application');
        $this->assertControllerName('Application\Controller\Index');
        $this->assertControllerClass('IndexController');
        $this->assertActionName('about');
        $this->assertMatchedRouteName('about');
    }

}