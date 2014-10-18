<?php

class BootstrapSelectionGroup extends SelectionGroup {
	/**
	 * 
	 * @param String $name Name to be given to the input element, will also become the id for the wrapper div
	 * @param Array $items Array of options
	 * @param String $title Label text to appear next to options
	 * @param String $value Default value
	 */
	function __construct($name, $items, $title = null, $value = null ) {
	  	
		$dir = substr(Director::makeRelative(dirname(__FILE__)), 1);
		$this->addExtraClass('js-selectGroupToggle');

		parent::__construct($name, $items);
		$this->title = ($title === null) ? $name : $title;
		if($value !== NULL) $this->setValue($value);
		$this->hideLabelColumn = false;
	}
	
	function gethideLabelColumn() {
		return $this->hideLabelColumn;
	}
	
	function setHideLabelColumn($val = true) {
		$this->hideLabelColumn = $val;
	}
	
	function FieldHolder() {
		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
		$dir = substr(Director::makeRelative(dirname(__FILE__)), 1);
		Requirements::javascript("$dir/BootstrapSelectionGroup.js");
		
		return $this->renderWith("SelectionGroup");
	}
	
	function validate($validator){
		
		$valid = true;
		foreach($this->children as $idx => $child){
			if(is_object($child)) {
				$valid = ($child && $child->validate($validator) && $valid);
			}
		}
		
		return $valid;
	}
		
}