<?php

class Application_Plugin_ViewHelper extends Zend_Controller_Plugin_Abstract
{
	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$view = Zend_Controller_Action_HelperBroker::getExistingHelper('ViewRenderer')->view;

		// Set doctype to HTML5
		$view->doctype('HTML5');

		// Meta tags
		$view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');

		// Add default css files
		$view->headLink()->appendStylesheet("/css/template/common.css");

		// Add any standard javascript files/libraries
		$view->headScript()->appendFile("/js/common.js");
		$view->headScript()->appendFile("/js/modernizr-2.5.3.js");

		// Base page title
		$view->headTitle('ZF HTML5 Project')
			->setSeparator(' - ')
			->setDefaultAttachOrder(Zend_View_Helper_Placeholder_Container_Abstract::PREPEND);
	}
}