window.initBootstrapQuantity = function(parent_el) {
	parent_el.find('input.js-quantity:not(.js-customerToQuantity)').each(function(){
		var $this = jQuery(this);
		
		// skip any attempt to apply the transformation multiple times
		if($this.data('js-quantity-done')) 
			return;
		$this.data('js-quantity-done', true);
		
		var value = Number($this.attr('value'));
		var step =  $this.data('step') ? $this.data('step') : 1;

		$this.wrap('<div />');
		var parent = $this.parent();
		parent.addClass('input-prepend').addClass('input-append input-group');

		var minus = jQuery('<button class="btn btn-primary input-group-addon">-</button>');
		minus.on('click.quantity', function(e){
			if ($this.hasClass('disabled')) {
				return false;
			}
			e.preventDefault();
			min = $this.data('min') ? $this.data('min') : 0;
			if(value <= min) return;
			$this.attr('value', value = value - step).change();
		})

		var plus = jQuery('<button class="btn btn-primary input-group-addon">+</button>');
		plus.on('click.quantity', function(e){
			if ($this.hasClass('disabled')) {
				return false;
			}
			e.preventDefault();
			if($this.data('max') && value >= $this.data('max')) return;
			$this.attr('value', value = value + step).change();
		})

		$this.before(minus).after(plus);
		
	});
}

window.initBootstrapMaxMinQuantity = function(parent_el) {
	parent_el.find('input.js-quantity, [data-max], [data-min]').each(function(){
		var $this = jQuery(this);
		var $input = $this.is('input') ? $this : $this.find('input');
		$input.on('keyup.value', function(e) {jQuery(this).change();})
		$input.on('change.value', function(e) {
			value = Number($input.attr('value'));	
			changed = false;
			min = $this.data('min') ? $this.data('min') : 0;
			if(value < min) {
				value = min; 
				changed = true;
				$input.attr('value', value);	
			}

			if($this.data('max') && value > $this.data('max')) {
				value = $this.data('max'); 
				changed = true;

			}
			if(!changed) return;

			if($this.data('currency')) {
				value = parseFloat(value); 
				value = value.toFixed(2);	
			}

			$input.attr('value', value);
		});
	});
}

window.initBootstrapQuantity(jQuery(document));
window.initBootstrapMaxMinQuantity(jQuery(document));