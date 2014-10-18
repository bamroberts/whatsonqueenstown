var selectGroupToggleActiveClass = 'btn-primary'

var selectGroupToggleClick = function(button, group, holder){
	
	if(button.is('.' + selectGroupToggleActiveClass)) return;
	var excludeChildButton = group.find('ul.js-selectGroupToggle .' + selectGroupToggleActiveClass);
	holder.find('.' + selectGroupToggleActiveClass).not(excludeChildButton).removeClass(selectGroupToggleActiveClass)
	button.addClass(selectGroupToggleActiveClass);
	//if there is a change fire the update
	if(group.data('field').attr('value') != button.data('option').attr('value')) {
		group.data('field').attr('value',button.data('option').attr('value')).change();
    }
	var excludeChildLi = group.find('ul.js-selectGroupToggle li.selected');
	group.find('li.selected').not(excludeChildLi).removeClass('selected');
	button.data('target').addClass('selected'); 
}
	
window.initSelectionGroup = function() {
	jQuery('ul.js-selectGroupToggle').each(function() {
		var group = jQuery(this);
		var excludeChildren = group.find('ul.js-selectGroupToggle :radio');
		var radio = group.find(':radio').not(excludeChildren);

		var holder = jQuery('<div />').addClass('btn-group btn-group-xs');

		var fieldName = radio.first().attr('name');
		var field = jQuery('<input type="hidden" name="' + fieldName + '" />');

		var buttons = [];

		group.data('field',field);
		radio.each(function(){
			var option = jQuery(this);

			var label = group.find("label[for='" + option.attr('id') + "']").hide();
			label = label.text();
			var button = jQuery('<a href="#" class="btn btn-default">' + label + '</a>');

			if(obj = option.parent('li').find('[data-btn-class]')) { button.addClass(obj.data('btn-class'))}

			holder.append(button);
			button.data('option',option);
			button.data('target',option.parent('li'));
			
			option.hide();
			
			selected = button.data('target').is('.selected') ? 'selected' : '';
			button.data('target').addClass('selected');
			if(button.data('target').height() == 0) {
				button.data('target').addClass('no-content');
			}
			
			button.data('target').removeClass('selected');
			button.data('target').addClass(selected);
			 
			if (option.attr('checked')) {
				field.attr('value',option.attr('value'));
				button.addClass('btn-primary');
				option.parent().addClass('selected');
			}
			button.click(function(e){
					e.preventDefault();
					selectGroupToggleClick(button, group, holder);
			});
			buttons[label] = button;
			
			
			
		});
		
		field.change(function(){
			var $that = jQuery(this);
			text = $that.val();
			if(buttons[text]) {
				selectGroupToggleClick(buttons[text], group, holder);
			}
		});
		
		holder.insertBefore(group);
		field.insertBefore(radio.first());
		radio.remove();
	});
}
window.initSelectionGroup();