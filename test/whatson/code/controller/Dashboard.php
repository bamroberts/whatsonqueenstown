<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author o0BAMBAM0o
 */
class DashboardController extends DataObjectController {

	public $modelClass = 'Event';

//	function index() {
//
//	}

	function Events($datestring) {
		//$set = new DataObjectSet();
		return DataObject::get('Event', "\"Date\" = '$datestring'");
	}

	function Days($number = 1) {
		$set = new DataObjectSet();

		$plus = $this->request->getVar('plus') ? $this->request->getVar('plus') : 0;
		$baseDate = strtotime("+$plus Day");
		for($i = 0; $i < $number; $i++) {
			$date = strtotime("+$i Day", $baseDate);
			$set->push($obj = new DataObject());
			$obj->DayTitle = Date('D jS M', $date);
			$obj->Events = $this->Events(date('Y/m/d', $date));
			$obj->ColSpan = 12 / $number;
		}
		return $set;
	}

}

class VenueController extends DataObjectController {
	public $modelClass = 'Venue';
	public $Title = 'Venues';

}

class EventController extends DataObjectController {
	public $modelClass = 'Event';
	public $Title = 'Events';

}


class AdminVenue extends VenueController {
	
}

class AdminEvent extends EventController {

}

class AdminCategory extends DataObjectController {
	public $modelClass = 'Categories';
	public $Title = 'Categories';

}
