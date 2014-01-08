<?php 

/**
 * 
 * Controller des erreurs de l'application
 * 
 * @category		App1
 * @package			Core
 * 
 */

class ErrorController extends Zend_Controller_Action
{
	
	public function init()
	{
		$this->_helper->layout->setLayout('404');
	}
	function errorAction()
	{
		$errorHandler = $this->_getParam('error_handler');
		$this->view->exception = $errorHandler->exception;
	}
}