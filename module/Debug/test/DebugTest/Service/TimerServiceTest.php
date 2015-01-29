<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 15.12.14
 * Time: 23:47
 */

namespace DebugTest\Service;


use Debug\Service\TimerService;
use PHPUnit_Framework_TestCase;
use Zend\Mvc\MvcEvent;

class TimerServiceTest extends PHPUnit_Framework_TestCase {


    public function testMeAction(){
        $timer = new TimerService(true);
        $this->assertNotNull($timer, '"timer" was initialiate correctly');

        $timer->start(MvcEvent::EVENT_RENDER);
        sleep(2);
        $time = $timer->stop(MvcEvent::EVENT_RENDER);
        $this->assertEquals(2, intval($time), '"Time" must be 2');
    }

}