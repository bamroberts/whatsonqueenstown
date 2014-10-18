<?php

class BootstrapCollapsableCompositeField extends BootstrapCompositeField { 
	
	public function __construct($name, $children = null) {
		$args = func_get_args();
		
		$name = array_shift($args);
		if(!is_string($name)) user_error('BootstrapCollapsableCompositeField::__construct(): $name parameter to a valid string', E_USER_ERROR);
		
		$this->name = $name;
		$this->title = $name;
		$this->id = Convert::raw2htmlatt($name);
                
		call_user_func_array("parent::__construct", $args);

	}
	
	public function FieldHolder() {
		$fields = parent::FieldHolder();
		
		return 	 <<<HTML
			<div class="panel-group{$this->extraClass()}" id="collapse{$this->id}">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#collapse{$this->id}" href="#collapse{$this->id}target">
								$this->title
							</a>
						</h4>
					</div>
					<div id="collapse{$this->id}target" class="panel-collapse collapse">
						<div class="panel-body">
							$fields
						</div>
					</div>
				</div>
			</div>	
HTML;
		
	}
		
	
}
