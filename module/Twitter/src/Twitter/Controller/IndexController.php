<?php
/**
 * Created by PhpStorm.
 * User: nevriyedurmaz
 * Date: 3.02.15
 * Time: 01:00
 */

namespace Twitter\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction()
    {
        //echo '<pre>';var_dump($this->getServiceLocator()->get('Config'));echo '</pre>';
        $twitter = $this->getEvent()->getApplication()->getServiceManager()->get('twitter');
        echo "<pre>";
        var_dump($twitter->account->verifyCredentials());
        //return new ViewModel();
    }

    public function aboutAction() {
        return new ViewModel();
    }

}