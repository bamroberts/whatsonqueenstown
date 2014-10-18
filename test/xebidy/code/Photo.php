<?php 

class Photo extends Image {
	
	static $popupWidth = 800;
	static $popupHeight = 600;
	static $highResolution = 1000000; // (1MP)
	
	static $db = array(
		'Description' => 'Text',
		'Resolution' => 'Int'
	);
	
	static $has_one = array(
		'Page' => 'SiteTree'
	);
	
	static $api_access = array(
		'view' => array('Title', 'Description', 'AbsoluteLink')
	);
	
	static $singular_name = 'Photo';

	public function getCMSFields($fields = null) {
		$fields = parent::getCMSFields();
		$fields->removeByName("OwnerID");
		$fields->removeByName("Parent");
		$fields->removeByName("ParentID");
		$fields->removeByName("Filename");
		$fields->removeByName("SortOrder");
		$fields->removeByName("Sort");
		$fields->removeByName("Content");
		$fields->removeByName('BackLinkTracking');
		$fields->removeByName('Name');
		$fields->removeByName('Resolution');
		$fields->removeByName('Page');
		$fields->removeByName('ShowInSearch');
		
		//TODO: Hook for extensions
		
		return $fields;
	}
	
	function Thumbnail($width = 90, $height = 90) {
		return $this->CroppedImage($width, $height);
	}
	
	function CroppedImage($width, $height) {
		if ($width == $this->Width && $height == $this->Height) {
			return $this;
		}
		return parent::CroppedImage($width, $height);
	}
	
	function SetWidth($width) {
		if ($width == $this->Width) {
			return $this;
		}
		return parent::SetWidth($width);
	}
	
	function SetHeight($height) {
		if ($height == $this->Height) {
			return $this;
		}
		return parent::SetHeight($height);
	}
	
	function PopupThumbnail($width = null, $height = null) {
		if ($thumbnail = $this->CroppedImage($width, $height)) {
			return '<a href="' . $this->SetRatioSize(self::$popupWidth, self::$popupHeight)->URL . '" class="image popup" rel="Gallery" title="' . $this->Title . '" download="' . $this->URL . '"><img src="' . $thumbnail->URL . '" alt="' . $this->Title . '" /></a>';
		}
	}
	
	function isHighResolution() {
		return $this->Resolution >= self::$highResolution;
	}
	
	function getAbsoluteLink() {
		return $this->getAbsoluteURL();
	}
	
	function onBeforeWrite() {
		parent::onBeforeWrite();
		
		if (!$this->Resolution) {
			$this->Resolution = $this->getWidth() * $this->getWidth();
		}
	}
}