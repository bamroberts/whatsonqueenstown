<?php

class SiteTreeExtension extends SiteTreeDecorator {

	static $cache_ignore_pagetypes = array('UserDefinedForm', 'Product', 'ProductGroup');
	
	function extraStatics() {
		return array(
			'has_one' => array(
				'Photo' => 'Photo'
			),
			'has_many' => array(
				'Photos' => 'Photo'
			)
		);
	}
	
	function canStaticPublish() {
		$ignored = self::$cache_ignore_pagetypes;
		
		// check an anonymous person can view
		$anon = new Member;
		$anon->ID = -1;
		
		if (!in_array($this->owner->ClassName, $ignored) && $this->owner->canView($anon)) {
			return true;
		}
		
		return false;
	}
	
	function Thumbnail($width = null, $height = null) {
	
		if ($this->owner->PhotoID) {
			$thumbnail = $this->owner->getComponent('Photo');
		} elseif ($this->owner->Photos()->Count()) {
			$thumbnail = $this->owner->Photos()->First();
		} else {
			require_once(dirname(__FILE__) . '/../../thirdparty/phpQuery/phpQuery.php');
			
			$content = phpQuery::newDocument($this->owner->Content);
			phpQuery::selectDocument($content);
			
			if ($filename = $content['img:first']->Attr('src')) {
				$thumbnail = File::find($filename);
			}
		}
		
		if (isset($thumbnail)) {
			if ($width && $height) {
				if ($thumbnail->getDimensions() == "{$width}x{$height}") {
					return $thumbnail;
				}
				else {
					return $thumbnail->Thumbnail($width, $height);
				}
			}
			return $thumbnail;
		}
		return false;
	}
	
	function LinkedThumbnail($width = null, $height = null) {
		if ($thumbnail = $this->owner->Thumbnail($width, $height)) {
			return '<a href="' . $this->owner->Link() . '" class="image"><img src="' . $thumbnail->URL . '" alt="' . $this->owner->Title . '" /></a>';
		}
	}
	
	function Summary() {
		if ($this->owner->MetaDescription) return $this->owner->obj('MetaDescription');
		
		require_once(dirname(__FILE__) . '/../../thirdparty/phpQuery/phpQuery.php');
		
		$content = phpQuery::newDocument($this->owner->obj('Content')->forTemplate());
		phpQuery::selectDocument($content);
		
		if ($content['p']->Text()) return DBField::create('HTMLText', $content['p']->Text());
		
		return $this->owner->obj('Content');
	}
	
	public function Classes($stopAtClass = 'Page') {
		$classes       = array();
		$classAncestry = array_reverse(ClassInfo::ancestry($this->owner->class));
		$stopClasses   = ClassInfo::ancestry($stopAtClass);
		
		foreach($classAncestry as $class) {
			if(in_array($class, $stopClasses)) break;
			$classes[] = $class;
		}
		
		// optionally add template identifier
		if(isset($this->owner->template) && !in_array($this->owner->template, $classes)) {
			$classes[] = $this->owner->template;
		}
		
		return Convert::raw2att(implode(' ', $classes));
	}
	
	public function Children($limit = null) {
		if ($limit) {
			return parent::Children()->getRange(0, $limit);
		}
		return parent::Children();
	}
	
	public function Photos($limit = null) {
		if ($limit) {
			return $this->owner->getManyManyComponents('Photos', null, null, null, '0, ' . (int) $limit);
		}
		return $this->owner->getManyManyComponents('Photos');
	}	
	
	function allPagesToCache() {
		// Get each page type to define its sub-urls
		$urls = array();
 
		// memory intensive depending on number of pages
		$pages = DataObject::get("SiteTree");
		
		foreach($pages as $page) {
			// check to make sure this page is not in the classname and make sure can view!
			if($page->canStaticPublish()) {
				$urls = array_merge($urls, (array)$page->subPagesToCache());
			}
		}
		 
		// add any custom URLs which are not SiteTree instances
		//$urls[] = "sitemap.xml";
 
		return $urls;
	}
 
	/*
	 * Get a list of URLs to cache related to this page
	 */
	function subPagesToCache() {
		$urls = array();
		
		// add current page, check anonymous person is allowed to access page
		if ($this->owner->canStaticPublish()) {
			$urls[] = $this->owner->Link();
			
			if ($this->owner->ParentID > 0 && $parent = $this->owner->Parent()) {
				if ($parent->canStaticPublish()) {
					$urls[] = $parent->Link();
				}
			} 
		}
		 
		return $urls;
	}
   
	function pagesAffectedByChanges() {
		$urls = $this->owner->subPagesToCache();
		return $urls;
	}
		
}
	