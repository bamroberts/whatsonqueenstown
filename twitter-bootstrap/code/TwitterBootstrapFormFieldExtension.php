<?php

class TwitterBootstrapFormFieldExtension extends Extension {
	
	protected $data = array();

	public function Output($wraponly = false) {
		return $this->TwitterBootstrapFieldHolder($wraponly);
	}

	public function TwitterBootstrapFieldHolder($wraponly = false) {
        
		//If doesn't have a parent class retun
		if (!$this->owner) return;
		        
		/*if (get_class($this->owner) == 'TableListField') {
			print_r($this);
			die();
		}*/

		// Only override FiledHolder template for fields of type: 
		$override = array(
			'TextField', 
			'TextareaField',
			'CheckboxField',
			'CheckboxSetField',
			'J6CheckboxSetField', 
			'NumericField',
			'DropdownField', 
			'AjaxUniqueTextField',
			'J6AjaxUniqueTextField',
			'EmailField', 
			'ConfirmedPasswordField',
			'J6ConfirmedPasswordField',
			'PasswordField',
			'ReadonlyField',
			'LookupField',
			'CheckboxField_Readonly',
			'DatetimeField_Readonly',
			'DateField',
			'TimeField',
			'DatetimeField',
			'TimezoneDatetimeField',
			'OptionsetField',
			'CurrencyField',
			'SelectionGroup',
			'J6LiteralField',
			'J6PercentageField',
			'J6CurrencyField',
			'J6CurrencyField_Readonly',
			
			'SimpleImageField_Disabled',
			'HtmlEditorField_Readonly',
			'ImageField',
			'HtmlEditorField',
			
			'BootstrapToggleField',
			'BootstrapSelectionGroup',
			
			'CompositeField',
			
			'BootstrapCompositeField',
			'CreditCardField',
			
			'BootstrapQuantityField',
			'J6DropdownGroup',
			'TagField',
			'DynamicTagField',
			'FormAction',
			'ActionField',
			'BootstrapHiddenField',
			
			'FieldGroup',
			'DateField_Disabled'
		);
		
		if (!in_array(get_class($this->owner), $override)) {
			//debug::show(get_class($this->owner));  //For debug
			return $this->owner->FieldHolder();
		}

		//Get XML escaped (HTML safe) values
		$Title = $this->owner->XML_val('Title');
		$Message = $this->owner->XML_val('Message');
		$MessageType = $this->owner->XML_val('MessageType');
		$RightTitle = $this->owner->XML_val('RightTitle');
		$Type = $this->owner->XML_val('Type');
		if($Type == 'hidden') {$Type = 'hiddenField';}
		$extraClass = $this->owner->XML_val('extraClass');
		$Name = $this->owner->XML_val('Name');

		if(method_exists($this,"Render{$this->owner}")) {
			$Field = $this->{"Render{$this->owner}"}();
		} else {
			$Field = $this->owner->Field();
		}
		
		
		$helpContent = $this->owner->XML_val('helpContent');
		$helpType = $this->owner->XML_val('helpType');
		
		
		switch ($MessageType){
		  case 'required':
		  case 'validation':
		      $MessageType='error';
		      break;
		  default:
		      break;
		}
		
		// Only one of the the following titles should apply
		$titleBlock = (!empty($Title)) ? "<label class=\"control-label left\" for=\"{$this->owner->id()}\">$Title</label>" : "";
		$rightTitleBlock = (!empty($RightTitle)) ? "<label class=\"right\" for=\"{$this->owner->id()}\">$RightTitle</label>" : "";

		// $MessageType is also used in {@link extraClass()} with a "holder-" prefix
		$messageBlock = (!empty($Message)) ? "<span class=\"help-inline message\">$Message</span>" : "";
		$extraBlockClass = false;
		//Help
		switch($helpType){
		  case 'inline':
		      $helpContent = '<div class="help-inline">' . $helpContent . '</div>';
		      $extraBlockClass = ' nowrap';
		      break;
		  case 'block':
		      $helpContent = '<div class="help-block">' . $helpContent . '</div>';
		      break;
		  case 'popup':
		      $helpContent = '<div class="help-popover icon-question-sign" title="' . $Title() . '" data-content="' . $helpContent . '"></div>';
		      break;
		}
		
		
		//Pain in the ass method to find if we are in a composite group
		$isComposite = false;
		//if ($this->owner->containerFieldSet && $this->owner->containerFieldSet->containerField) {
			//$isComposite = $this->owner->containerFieldSet->containerField);
			//echo $isComposite;	
		//}		
		
		
		
		$group = (!$this->owner->children || $this->owner->forceGroup) ? 'control-group' : '' ;
		$control =  (!$this->owner->children || $this->owner->forceGroup || $this->owner instanceof FieldGroup) ? 'controls' : '' ;
		$data = $this->owner->getDataString();

		
		
		$hasExtra = array();
		if($this->owner->prepend) {
			$hasExtra['input-group']   = ' input-group';
			$hasExtra['input-prepend'] = ' input-prepend';
			$this->owner->prepend = "<span class=\"add-on input-group-addon prepend\">{$this->owner->prepend}</span>";
		}
		
		$hasAppend = false;
		if($this->owner->append) {
			$hasExtra['input-group']  = ' input-group';
			$hasExtra['input-append'] = ' input-append';
			$this->owner->append = " <span class=\"add-on input-group-addon append\">{$this->owner->append}</span>";
		}
		
		$hasExtra = join('', $hasExtra);

		if($wraponly) {
			return <<<HTML
			<span id="$Name" class="field $Type $extraClass $MessageType" $data>
				<div class="$hasExtra">
							{$this->owner->prepend}$Field{$this->owner->append}
				</div>
			</span>
HTML;
		}
		
		return <<<HTML
                <div id="$Name" class="field form-group $group $Type $extraClass $MessageType">
                    $titleBlock
                    <div class="$control$extraBlockClass" $data>
						<div class="$hasExtra">
							{$this->owner->prepend}$Field{$this->owner->append}
							$messageBlock
							$helpContent
						</div>
                    </div>
                    $rightTitleBlock
                </div>
HTML;
	}
		
	public function TwitterBootstrapField() {
		$field = $this->owner->Field();
		$field = str_replace('class="action', 'class="btn action', $field);
		return $field;
	}
	
	public function setHelp($content, $type = 'inline') {
		$this->owner->helpContent = $content;
		$this->owner->helpType    = $type;
	}
	
	function setDataFields($array) {
		if(!is_array($array)) return;
		foreach($array as $key=>$value) {
			$this->setDataField($key,$value);
		}
	}
	
	function setDataField($key,$value = true) {
		$key = preg_replace('#^data-#', '', $key);
		if ($value == false && isset($this->data[$key])){
			unset($this->data[$key]);
		}
		$this->data[$key] = Convert::raw2xml($value);
		return $this;
	}
	
	function getDataString($key = false) {
		$content = '';
		$data = $key ? array($key=>$this->getDataField($key)) : $this->data;
		foreach($data as $key=>$value) {
			$content .= "data-{$key}=\"$value\" ";	
		} 
		return $content;
	}
	
	function getDataField($key) {
		return isset($this->data[$key]) ? $this->data[$key] : false;
	}
	
	function getDataFields() {
		return $this->data;	
	}

	/**
	 * Update the template used to include any new themes
	 */
	function setOwner($owner, $ownerBaseClass = null) {
		parent::setOwner($owner, $ownerBaseClass);
      $current_theme = J6Member::current_theme();
		if ($owner && (get_class($owner) == 'TableListField' || get_class($owner) == 'ExtendedTableListField' || get_class($owner) == 'J6DataObjectManager' ) ) {
			if ($current_theme != 'Original') {
				if(strpos($owner->template,$current_theme."_")===false) {
					$owner->template = $current_theme."_".$owner->template;
				}
				
			}
		}


		if ($owner && (get_class($owner) == 'HtmlEditorField')) {
			if ($current_theme == 'Theme2014') {
				//die(print_r($this,true));

				Requirements::block(MCE_ROOT . 'tiny_mce_src.js');
				Requirements::block(HtmlEditorConfig::get_active()->generateJS(), 'htmlEditorConfig');
			
				Requirements::javascript('twitter-bootstrap/thirdparty/summernote/summernote.js');
				Requirements::customScript(<<<JS
					jQuery(document).ready(function($){
						jQuery('.htmleditor textarea').summernote(
							{height: 300, tabsize: 2,
								toolbar: [
								    ['style', ['style']], 
								    ['style', ['bold', 'italic', 'underline', 'clear']],
								    ['fontsize', ['fontsize']],
								    ['color', ['color']],
								    ['para', ['ul', 'ol', 'paragraph']],
								    ['height', ['height']],
								    //['insert', ['picture', 'link']], 
								    ['insert', ['link']],
								    ['table', ['table']], 
								    ['help', ['help']] 
								]
							}
						);

						jQuery('form').submit(function(){
							jQuery('div.note-editable').each(function(){
								$(this).parents('div.controls').find('textarea').html(
									jQuery(this).html()
								)	
							})
							return true;
						});

					});
JS
				);
			}
		}
		/*if ($owner && (get_class($owner) == 'TabSet' ) ) {
			//die(get_class($owner->Form->Controller()));			
			if (get_class($owner->Form->Controller()) != "CMSMain"){
				if (J6Member::current_theme() != 'Original') {
					if(strpos($owner->template,J6Member::current_theme()."_")===false) {
						$owner->template = J6Member::current_theme()."_".$owner->template;
					}

					
				}
			}
		}*/
		
	}
	
	function RenderTimezoneDatetimeField() {
		return $this->RenderDatetimeField();
	}
	
	function RenderDatetimeField() {
		$owner = $this->owner;
		$owner->dateField->children = true;
		$owner->dateField->prepend = '<i class="fa fa-calendar"></i>';
		$owner->timeField->children = true;
		$owner->timeField->prepend = sprintf('<i class="fa fa-clock-o timeIcon" id="%s-icon"></i>', $owner->id());
 
		return $owner->dateField->TwitterBootstrapFieldHolder() . $owner->timeField->TwitterBootstrapFieldHolder();
	}
	
	function RenderBootstrapHiddenField() {
		$extraClass = $this->owner->extraClass();
		return "<input class=\"hiddenField$extraClass\" type=\"hidden\" id=\"" . $this->owner->id() . "\" name=\"{$this->owner->name}\" value=\"" . $this->owner->attrValue() . "\" />";
	}
}