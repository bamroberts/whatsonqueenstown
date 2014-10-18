<?php

/**
* TODO: Links should be moved to DataObject Controller and then check each model for permissions
* Otherwise the model (and links) function can't always find its way back to the parent
*/

class DataObjectExtras extends Extension {

	public function Link($action = '',$controller=false) {
       $class = get_class($this->owner);
		$id = $this->owner->ID;
		
		$ancestry = ClassInfo::ancestry($class);
		//Added option to passin additional controller class or name
		//As Models and Controllers are not  explicitly paired
		if ($controller) {
            if (is_object($controller)) {
                $controllerName = get_class($controller); 
            } else {
                $controllerName = (string) $controller;     
            }
            $ancestry[] = str_replace('Controller', '', $controllerName);
        }
		$ancestry = array_reverse($ancestry);
		
		// Look for a controller that relates to the data object
		foreach ($ancestry as $class) {
			$controller = $class . 'Controller';            
			if (class_exists($controller)) {
				// Look for a ControllerPage that relates to this controller
				if ($page = DataObject::get_one('ControllerPage', '"ControllerPage"."Controller" = \'' . $controller . '\' AND ("ControllerPage"."Method" IS NULL OR "ControllerPage"."Method" = \'index\')')) {
					 //If there is no ID, pass the action instead (i.e. for 'Add' links)
					 if (!$id) {
					 	 return  $page->Link($action);
					 } else {
					 	return  Controller::join_links($page->Link($id), $action);
					 }
				}
				if($controller == 'DataObjectController') {
					$controller = Controller::Curr()->class;
				}
				return Controller::join_links($controller, $id, $action);
			}
		}
		
		return '#';
	}

	public function modelController() {

		$class = get_class($this->owner);
		$ancestry = array_reverse(ClassInfo::ancestry($class));
		// Look for a controller that relates to the data object
		foreach($ancestry as $class) {
			$controllerClass = $class . 'Controller';
			if(class_exists($controllerClass)) {
				// Look for a ControllerPage that relates to this controller
				if($page = DataObject::get_one('ControllerPage', '"ControllerPage"."Controller" = \'' . $controllerClass . '\' AND ("ControllerPage"."Method" IS NULL OR "ControllerPage"."Method" = \'index\')')) {
					$controller = $page;
				} else {
					$controller = singleton($controllerClass);
				}
				break;
			}
		}
		if(isset($controller)) {
			$controller->request = Controller::curr()->getRequest();
			$controller->currentRecord = $this->owner;
			return $controller;
		}
	}

	function getResultsTableFormat() {
		return array();
	}

	function controllerCanEdit() {
		if(!$this->modelController()) {
			return false;
		}
		return min($this->modelController()->canView(), $this->owner->canEdit());
	}

}