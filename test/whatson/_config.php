<?php

include '_config_server.php';

global $project;
$project = 'whatson';

define('PROJECT', $project);

MySQLDatabase::set_connection_charset('utf8');

//make sure we have access to extra url items
Director::addRules(2, array(
	'$URLSegment//$Action/$ID/$OtherID/$X1/$X2/$X3' => 'ModelAsController',
));

SiteTree::enable_nested_urls();

//TwitterBootstrapControllerExtension::$include_bootstrap_datepicker = true;

DataObjectController::$page_size = 50;

