<?php 

class ActionField extends CompositeField {

	public $forceGroup = false;
	
	public function __construct(FormField $inputField = null, FormField $button = null) {
		$fields = array();
		if($inputField) {$fields[] = $inputField;}
		if($button) {$fields[] = $button;}
		
		$this->forceGroup = true;
	
		parent:: __construct($fields);
	}
	
	public function TwitterBootstrapFieldHolder() {
		if(!$field = $this->getInputField()) return false;
		
		//Get XML escaped (HTML safe) values
		$this->Title = $field->XML_val('Title');
		$this->Message = $field->XML_val('Message');
		$this->MessageType = $field->XML_val('MessageType');
		$this->RightTitle = $field->XML_val('RightTitle');
		$this->Type = $field->XML_val('Type');
		$this->extraClass = $field->XML_val('extraClass');
		$this->helpContent = $field->XML_val('helpContent');
		$this->helpType = $field->XML_val('helpType');
		
		return parent::TwitterBootstrapFieldHolder();
	}

	
	public function field() {
		if(!$this->getInputField()) return false;
		return sprintf('
			<div class="input-append">
			  %s%s
			</div>
			'
			, $this->getInputField()->TwitterBootstrapFieldHolder(true)
			, $this->getButton()->field()
		);		
	}
	
	public function getButton() {
		if(isset($this->children->items[1])) {
			return $this->children->items[1];
		}
		return emptyField();
	}
	
	public function setButton(FormField $field) {
		$this->children->items[1] = $field;
		$this->sequentialSet = null;
	}
	
	public function getInputField() {
		if(isset($this->children->items[0])) {
			return $this->children->items[0];
		}
		return false;
	}
	
	public function setInputField(FormField $field) {
		$this->children->items[0] = $field;
		$this->sequentialSet = null;
	}
	
	
	//Knock out composite field controls
	public function push() {
		return false;
	}
	public function insertBefore() {
		return false;
	}

	public function insertAfter() {
		return false;
	}

	public function removeByName() {
		return false;
	}

	public function replaceField() {
		return false;
	}
	
	public function setChildren() {
		return false;
	}
	
}