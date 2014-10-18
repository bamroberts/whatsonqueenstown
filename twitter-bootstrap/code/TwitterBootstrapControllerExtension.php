<?php

class TwitterBootstrapControllerExtension extends Extension {

	public static $include_bootstrap 			= false;
	public static $include_bootstrap_datepicker = false;

	function onAfterInit() {
		if (self::$include_bootstrap) {
			Requirements::javascript('twitter-bootstrap/thirdparty/bootstrap/js/bootstrap.min.js');
			Requirements::css('twitter-bootstrap/thirdparty/bootstrap/css/bootstrap.min.css');
			Requirements::css('twitter-bootstrap/thirdparty/bootstrap/css/bootstrap-responsive.min.css');
		}
		if (self::$include_bootstrap_datepicker) {
			Requirements::javascript('twitter-bootstrap/thirdparty/bootstrap-datepicker/js/bootstrap-datepicker.js');
			Requirements::css('twitter-bootstrap/thirdparty/bootstrap-datepicker/css/bootstrap-datepicker.css');
		}
	}
	
}