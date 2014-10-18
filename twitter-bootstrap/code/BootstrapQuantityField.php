<?php

class BootstrapQuantityField extends NumericField {
	
	protected $dataAttributes = array();
	
	function field(){
		self::addRequirements();	

		$this->addExtraClass('input-quantity');
		$this->addExtraClass('js-quantity');

		$attributes = array(
			'type' => 'text',
			'class' => 'text' . ($this->extraClass() ? $this->extraClass() : ''),
			'id' => $this->id(),
			'name' => $this->Name(),
			'value' => $this->Value(),
			'tabindex' => $this->getTabIndex(),
			'maxlength' => ($this->maxLength) ? $this->maxLength : null,
			'size' => ($this->maxLength) ? min( $this->maxLength, 30 ) : null 
		);
		
		if($this->disabled) $attributes['disabled'] = 'disabled';
		
		$attributes = array_merge($attributes, $this->dataAttributes);
		
		return $this->createTag('input', $attributes);
	}
	
	static function addRequirements() {
		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
		$dir = substr(Director::makeRelative(dirname(__FILE__)), 1);
		Requirements::javascript("$dir/BootstrapQuantityField.js");
		Requirements::javascript(SAPPHIRE_DIR . 'javascript/NumericField.js');
	}
	
	/**
	 * Set the field value.
	 * Returns $this.
	 */
	function setValue($value) {
		if(is_object($value) && $value->hasMethod('Count')){
			$value = $value->Count();
		}
		$this->value = $value; return $this;
	}
		
	function setDataAttribute($name, $value) {
		$this->dataAttributes["data-" . ltrim($name, "data-")] = $value;
	}
	
	function setMax($value) {
		$this->setDataAttribute('max',$value);
	}
	
	function setMin($value) {
		$this->setDataAttribute('min',$value);
	}
	
	function setStep($value) {
		$this->setDataAttribute('step',$value);
	}
	
}