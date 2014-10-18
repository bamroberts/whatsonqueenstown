<?php 

class BootstrapCompositeField extends CompositeField {
	
	public $extraRequirements = array();
	/**
	* Returns the fields nested inside another DIV - Amended to use Bootstrap
	*/
	function FieldHolder() {
		$fs = $this->FieldSet();
		$idAtt = isset($this->id) ? " id=\"{$this->id}\"" : '';
	//	$className = ($this->columnCount) ? "field CompositeField {$this->extraClass()} multicolumn" : "field CompositeField {$this->extraClass()}";
		$className = ($this->columnCount) ? "field CompositeField multicolumn" : "field CompositeField";
		$content = "<div $idAtt class=\"clearfix $className\">\n";
		
		foreach($fs as $subfield) {
			if($this->columnCount) {
				$className = "column{$this->columnCount}";
				if(!next($fs)) $className .= " lastcolumn";
				$content .= "\n<div class=\"{$className}\">\n" . $subfield->TwitterBootstrapFieldHolder() . "\n</div>\n";
			} else if($subfield){
				$content .= "\n" . $subfield->TwitterBootstrapFieldHolder() . "\n";
			}
		}
		$content .= "</div>\n";
		$this->getRequirements();
		return $content;
	}
	
	function pushFirst($item) {
		$before = ($this->children && $this->children->items[0]) ? $this->children->items[0]->Name : false;
		$this->insertBefore($item, $before);
	}
	
	function addRequirement($format, $path) {
		$this->extraRequirements[$format][] = $path;
	}
	
	function getRequirements() {
		if(isset($this->extraRequirements['css'])) {
			foreach($this->extraRequirements['css'] as $item) {
				Requirements::css($item);
			}
		}
		if(isset($this->extraRequirements['javascript'])) {
			foreach($this->extraRequirements['javascript'] as $item) {
				Requirements::javascript($item);
			}
		}
	}
}