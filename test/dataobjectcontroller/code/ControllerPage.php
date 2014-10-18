<?php

class ControllerPage extends Page {

	static $db = array(
		'Controller' => 'Varchar',
		'Method' => 'Varchar',
		'WhiteLabelTitle' => 'Varchar(255)'
	);
	
	static $defaults = array(
		'Method' => 'index'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Content.Main', new TextField('Controller'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextField('Method'), 'Content');
		$fields->addFieldToTab('Root.Content.Main', new TextField('NavIcon', 'Nav Icon'), 'Content');
		return $fields;
	}
	
	public function Link($action = null) {
		if (!$action && $this->Method != 'index') {
			$action = $this->Method;
		}
		return parent::Link($action);
	}
	
	public function canView() {
		//Make sure our delegated controller class actually exists.
		if(!ClassInfo::exists($this->Controller)) {
			return (stripos(' '.Controller::curr()->request->getURL(), 'admin') == 1) ? true : false;
		}
		
		if (!parent::canView()) {
			return false;
		}
		if($this->Controller ){
			if(ClassInfo::is_subclass_of(singleton($this->Controller)->ModelClass, 'J6Product') && Client::get_current() && !Client::get_current()->canViewProductClass(singleton($this->Controller)->ModelClass)) return false;
		}
		$member = Member::currentUser();
		
		if ($member && $member->isAdmin() && (!$this->Controller || !class_exists($this->Controller))) {
			return true;
		}
		
		$action = $this->Method ? $this->Method : 'index';
		
		// Check if user can view this action on this controller
		return singleton($this->Controller)->canView() &&
			   singleton($this->Controller)->checkAccessAction($action);
	}

}

class ControllerPage_Controller extends Page_Controller {

	public function handleRequest($request) {
		//Make sure our delegated controller class actually exists.
		if(!ClassInfo::exists($this->Controller)) {return parent::handleRequest($request);}
		
		$class = $this->Controller;
		$client = Client::get_current();
		
		if($client && $client->Theme && class_exists("{$client->Theme}_{$class}")) {
			$class = "{$client->Theme}_{$class}";
		}
		
		$controller = new $class($this->dataRecord);
		$this->ControllerObject = $controller;
		
		//Test overridden class is an extention
		if(!$controller instanceof $this->Controller) {
			user_error(get_class($controller) . " should be an extention of {$this->Controller}!"); 
		}
		
		//Test $overrides is set
		if($class != $this->Controller && $controller->overrides != $this->Controller) {
			user_error(get_class($controller) . " must have public property \$overrides = '$this->Controller' !");
		}
				
		return $controller->handleRequest($request);
	}

}