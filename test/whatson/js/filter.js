/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($) {
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();

		var selected = [];
		//selected[' ']= false;
		$('.filter input').change(function() {
			var $this = $(this);
			var val = $this.val();
			var value = '.'+val;
			if($this.is(':checked')) {
				selected.push(value);
			} else {
				removeItem = value;
				selected = jQuery.grep(selected, function(value) {
					return value != removeItem;
				});
				//selected.splice(val, 1);
			}			
		
			filterList = selected.join();
			console.log(filterList);
			$('.media').each(function() {
				var $this = $(this);
				if(!filterList ||  $this.is(filterList)) {
					$this.fadeIn();
				} else {
					$this.fadeOut();
				}

			})

		});
		
		

	})
})(jQuery);