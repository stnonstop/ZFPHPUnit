<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 15.12.14
 * Time: 20:21
 */

namespace Debug\Service;

class TimerService {

    private $times = array();
    private $isFloat;

    public function __construct($isFloat) {
        $this->isFloat = $isFloat;
    }

    public function start($key){
        $this->times[$key] = microtime($this->isFloat);
    }

    public function stop($key){
        if(! isset($this->times[$key])){
            throwException(new \Exception('Timer Error : Key '.$key.' not started') );
        }

        return microtime($this->isFloat) - $this->times[$key];
    }

}