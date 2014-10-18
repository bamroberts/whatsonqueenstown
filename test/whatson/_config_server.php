<?php

error_reporting(E_ALL & ~(E_STRICT|E_NOTICE|E_DEPRECATED));
ini_set('display_errors', 1);

global $databaseConfig;
$databaseConfig = array(
	"type" 		=> "MySQLDatabase",
	"server"	=> "127.0.0.1",
	"username"	=> "root",
	"password"	=> "rusYc0ll",
	"database" => "whatson"
);

Director::set_environment_type("dev");
Email::send_all_emails_to("iam@bamroberts.com");
