<?php 

class GoogleAnalyticsSiteTreeExtension extends DataObjectDecorator {
	
	public function extraStatics() {
		return array(
			'db' => array(
				'RecentPageViews' => 'Int'
			)
		);
	}
	
	public function contentcontrollerInit() {
		if ($code = $this->GoogleAnalyticsCode()) {
			Requirements::customScript($code, 'GoogleAnalytics');
		}
	}
	
	public function GoogleAnalyticsCode() {
		$config = SiteConfig::current_site_config();
		
		if ($GoogleAnalyticsID = $config->GoogleAnalyticsID) {	
			return singleton('ViewableData')->renderWith('GoogleAnalytics', array('GoogleAnalyticsID' => $GoogleAnalyticsID));
		}
		
		return false;
	}
	
}