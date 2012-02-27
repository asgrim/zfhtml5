<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$this->view->headTitle('Index');
		$this->view->headLink()->appendStylesheet("/css/pages/index.css");
    }


}

