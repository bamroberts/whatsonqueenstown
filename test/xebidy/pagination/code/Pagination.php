<?php

class Pagination extends Extension {
	function Paginate() {
		return $this->owner->renderWith('Pagination');
	}
}
