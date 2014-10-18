var radioToggleActiveClass = 'btn-primary'

var radioToggleClick = function(button, group){
	if(button.is('.' + radioToggleActiveClass)) return;
	group.find('.' + radioToggleActiveClass).removeClass(radioToggleActiveClass)
	button.addClass(radioToggleActiveClass);
	group.data('field').attr('value',button.data('option').attr('value')).change();
}
	
window.initBootstrapToggleFields = function(parent_el) {
	parent_el.find('div.js-radioToggle .controls').each(function(){
		var group = jQuery(this);
		container = jQuery('<div />');
		container.addClass('btn-group btn-group-xs');
		group.prepend(container);

		radio = group.find(':radio');

		fieldName = radio.first().attr('name');
		var field = jQuery('<input type="hidden" name="' + fieldName + '" />');
		//field.insertBefore(group);

		group.prepend(field);

		group.data('field',field);
		radio.each(function(){
		var option = jQuery(this);
			label = group.find("label[for='" + option.attr('id') + "']").hide();
			label = label.text();
			var button = jQuery('<a class="btn btn-default">' + label + '</a>');
			container.append(button);
			button.data('option',option)
			if (option.attr('checked')) {
				field.attr('value',option.attr('value'));
				button.addClass(radioToggleActiveClass);
			}
			button.click(function(e){
					e.preventDefault();
					radioToggleClick(button, group);
				});
		});
		group.find('ul').remove();
	});
}
window.initBootstrapToggleFields(jQuery(document));
