<?php

class ContentControllerExtension extends Extension {
	
	function hasH1() {
		return strpos($this->owner->Content, '<h1') !== false;
	}
	
	function getH1() {
		return $this->owner->hasH1() || $this->owner->HideHeading ? false : '<h1>' . $this->owner->Title . '</h1>'; 
	}
	
	public function Inherited($objName) {
		$page = $this->owner->Data();
		do {
			if ($obj = $page->obj($objName)) {
				if ($obj instanceof ComponentSet) {
					if ($obj->Count()) {
						return $obj;
					}
				} elseif ($obj instanceof DataObject) {
					if ($obj->exists()) {
						return $obj;
					}
				} elseif ($obj->hasValue()) {
					return $obj;
				}
			}
		} while ($page->ParentID != 0 && $page = $page->Parent());
	}
		
}	