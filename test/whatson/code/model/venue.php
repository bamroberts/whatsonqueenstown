<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of venue
 *
 * @author o0BAMBAM0o
 */
class Venue extends DataObject {

	static $db = array(
		'Title' => "Varchar(100)",
		'Address' => "text",
		'Phone' => "Varchar(15)",
		'Blurb' => "Text",
		'Opening Times' => "Text",
		'FacebookLink' => "Text",
		'Website' => "Varchar(255)",
	);
	static $has_many = array(
		'Events' => 'Event',
		'Categories' => 'Venue_Category',
		'Images' => 'Venue_Image'
	);
	static $has_one = array(
		'Owner' => 'Member',
		'Logo' => 'Photo'
	);
	

}

class Event extends DataObject {

	static $db = array(
		'Title' => "Varchar(255)",
		'DoW' => "Varchar(15)",
		'Date' => "Date",
		'Time' => "Time",
		'Blurb' => "Text",
		'Opening Times' => "Text",
	);
	static $has_one = array(
		'Venue' => 'Venue',
		'Logo' => 'Photo'
	);
	static $has_many = array(
		'Categories' => 'Event_Category',
		//'Images' => 'Event_Image'
	);

	function getVenueLogo($width = 110, $height = 90) {
		$venue = $this->Venue();
		if(!$logo = $venue->Logo())
			return;
		if(!$link = $logo->SetRatioSize($width, $height))
			return;

		if($link->Title) {
			$title = Convert::raw2att($link->Title);
		} else {
			if(preg_match("/([^\/]*)\.[a-zA-Z0-9]{1,6}$/", $link->FileName, $matches)) {
				$title = Convert::raw2att($matches[1]);
			}
		}

		//need this as absolute
		return "<img src=\"{$link->getAbsoluteURL()}\" alt=\"$title\" />";

		//return $link;
	}

}

class Event_Image extends Image {

}

class Venue_Image extends Image {

}

class Category extends DataObject {

	static $db = array(
		'Title' => 'Varchar(50)',
	);
	static $has_one = array(
		'Parent' => 'Category',
	);

}

class Venue_Category extends Category {

	static $has_many = array(
		'Venues' => 'Venue'
	);

}

class Event_Category extends Category {

	static $has_many = array(
		'Events' => 'Event'
	);

}
