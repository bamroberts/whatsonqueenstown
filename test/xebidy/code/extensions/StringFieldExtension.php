<?php 

class StringFieldExtension extends Extension {
	
	/**
	 * Return another DBField object with this value in capitalize.
	 */
	public function Capitalize() {
		return DBField::create(get_class($this->owner), ucwords($this->owner->value), $this->owner->name);
	}
	
	/**
	 * Return string with http:// in front if it's not already there
	 */
	public function HTTP() {		
		$string = $this->owner->value;
		if ($string == '') return null;
		if (substr($string, 0, 7) != 'http://') {
			$string = 'http://' . $string;
		}
		return DBField::create(get_class($this->owner), $string, $this->owner->name);		
	}
	
	/**
	 * Return string without http:// in front if it's already there
	 */
	public function NoHTTP() {		
		$string = $this->owner->value;
		if ($string == '') return null;
		if (substr($string, 0, 7) != 'http://') {
			$string = str_replace('http://', '', $string);
		}
		return DBField::create(get_class($this->owner), $string, $this->owner->name);		
	}
	
}