<?php 

class ShortcodeHandlers extends Object {
	
	public static function LikeHandler($arguments, $caption = null, $parser = null) {
		Requirements::javascript("http://connect.facebook.net/en_US/all.js#xfbml=1");
		
		$code = '<fb:like';
		
		foreach($arguments as $key => $val) {
			$code .= ' ' . $key . '="' . $val . '"';
		}
		
		$code .= '></fb:like>';
		
		return $code;
	}
	
	public static $YouTubeConfig = array(
		'Width' => 640,
		'Height' => 385
	);
	
	public static function YouTubeHandler($arguments, $caption = null, $parser = null) {
		// first things first, if we dont have a video ID, then we don't need to
		// go any further
		
		if (!$arguments['id']) {
				return;
		}
		 
		$customise = array();
		/*** SET DEFAULTS ***/
		$customise['YouTubeID'] = $arguments['id'];
		//play the video on page load
		$customise['autoplay'] = false;
		//set the caption
		$customise['caption'] = $caption ? Convert::raw2xml($caption) : false;
		//set dimensions
		$customise['width'] = self::$YouTubeConfig['Width'];
		$customise['height'] = self::$YouTubeConfig['Height'];
		 
		//overide the defaults with the arguments supplied
		$customise = array_merge($customise,$arguments);
		 
		//get our YouTube template
		$template = new SSViewer('YouTubeHandler');
		 
		//return the customised template
		return $template->process(new ArrayData($customise));
		
	}
	
	public static function IFrameHandler($arguments, $caption = null, $parser = null) {
		
		$code = '<iframe';
		
		foreach($arguments as $key => $val) {
			$code .= ' ' . $key . '="' . $val . '"';
		}
		
		$code .= '></iframe>';
		
		return $code;
	}
	
}