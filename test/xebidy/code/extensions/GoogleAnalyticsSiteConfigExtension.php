<?php 

class GoogleAnalyticsSiteConfigExtension extends SiteTreeDecorator {
	
	public function extraStatics() {
		return array(
			'db' => array(
				'GoogleAnalyticsID' => 'Varchar(255)',
				'GoogleAnalyticsUsername' => 'Varchar(255)',
				'GoogleAnalyticsPassword' => 'Varchar(255)',
				'GoogleAnalyticsReportID' => 'Varchar(255)'
			)
		);
	}
	
	public function updateCMSFields(FieldSet &$fields) {
		
		$fields->addFieldsToTab("Root.GoogleAnalytics", array(
			new TextField('GoogleAnalyticsID', 'Google Analytics ID')
		));
		
		if (GoogleAnalytics::log_recent_pageviews()) {
			$fields->addFieldsToTab("Root.GoogleAnalytics", array(
				new HeaderField('GoogleAnalytics', 'Pageview Logging', 3),
				new TextField('GoogleAnalyticsUsername', 'Google Analytics Username'),
				new PasswordField('GoogleAnalyticsPassword', 'Google Analytics Password'),
				new TextField('GoogleAnalyticsReportID', 'Google Analytics Report ID')
			));
		}
		
	}
	
	public function getGoogleAnalyticsCredentials() {
		return array(
			'AnalyticsID' => $this->owner->GoogleAnalyticsID,
			'Username' => $this->owner->GoogleAnalyticsUsername,
			'Password' => $this->owner->GoogleAnalyticsPassword,
			'ReportID' => $this->owner->GoogleAnalyticsReportID
		);
	}
	
}