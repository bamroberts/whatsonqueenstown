<?php

class BootstrapToggleField extends OptionsetField {
	
	
	function __construct($name, $title = "", $source = array('No','Yes'), $value = "", $form = null) {
		parent::__construct($name, $title, $source, $value, $form);
		$this->addExtraClass('js-radioToggle');
		
		$dir = substr(Director::makeRelative(dirname(__FILE__)), 1);
		Requirements::javascript("$dir/BootstrapToggleField.js");
	}
	
}

