<?php 

class GoogleAnalytics extends Controller {
	
	static $log_recent_pageviews = false;
	
	static function log_recent_pageviews() {
		return self::$log_recent_pageviews;
	}
	
	static function enable_log_recent_pageviews() {
		self::$log_recent_pageviews = true;
	}
	
	public function getCredentials() {
		$config = SiteConfig::current_site_config();
		return $config->getGoogleAnalyticsCredentials();
	}
	
	public function SynchRecentPageviews() {
		if (!self::log_recent_pageviews()) user_error("Log recent pageviews is disabled.", E_USER_WARNING);
		
		$credentials = $this->getCredentials();
		
		foreach($credentials as $key => $credential) {
			if ($credential == '') user_error("$key is not set in site config.", E_USER_ERROR);
		}
		
		$dimensions = array('pagePath');
		$metrics    = array('visits');
		$start_date = date('Y-m-d', strtotime('2 days ago'));
		$end_date   = date('Y-m-d', strtotime('today'));
		
		$ga = new gapi($credentials['Username'], $credentials['Password']);
		$ga->requestReportData($credentials['ReportID'], $dimensions, $metrics, '-visits', null, $start_date, $end_date);
		
		foreach($ga->getResults() as $result) {
			if ($page = SiteTree::get_by_link($result)) {
				$views = $result->getVisits();
				
				// Write updates directly to tables so extra versions aren't created
				DB::query("UPDATE \"SiteTree\" SET \"RecentPageViews\" = '$views' WHERE \"ID\" = $page->ID");
				DB::query("UPDATE \"SiteTree_Live\" SET \"RecentPageViews\" = '$views' WHERE \"ID\" = $page->ID");
			}
		}
	}
	
}