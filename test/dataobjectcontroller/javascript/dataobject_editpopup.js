jQuery(document).ready(function() {
	var $ = jQuery;
	if ($('#DataObject_EditPopup').length > 0) {
		$('#DataObject_EditPopup').on('loaded', function () {
			var $edit_modal = $(this);
			// register new elements with various plugins
			$edit_modal.find('.date.year input').datepicker({format: 'dd/mm/yyyy', autoclose: true, startView: 2 });
			$edit_modal.find('.date input').datepicker({format: 'dd/mm/yyyy', autoclose: true});
			
			var preventSearch = false;
			var minResults = 5; // making this one searchable on less results
			// if on mobile make sure the search input does not get used
			if($('html.mobile-template').length > 0) {
				preventSearch = true;
				minResults = 1000;
			}
//			window.initSelect2Elements($edit_modal);
			$edit_modal.find('select').select2({
				allowClear: true,
				width: 'resolve',
				minimumResultsForSearch: minResults,
				preventSearchInput: preventSearch,
				dropdownCssClass: 'limited-drop' // do not let the drop-down fall too far off the bottom
			});

			if ($edit_modal.find('ul.tabstrip').length > 0) {
				$edit_modal.find('ul.tabstrip').each(function(){
					initTabstrip(this);
				});

				$edit_modal.find('ul.tabstrip a').click(function(e){
					e.preventDefault();
					window.setTimeout($edit_modal.modal('layout'),500);
				});
			}
			
			if (FindAndApplyBootstraps) {
				FindAndApplyBootstraps($edit_modal);
			}
			
			$edit_modal.modal('layout');
			DoModelSearch($edit_modal);
			if ($edit_modal.find('#Quantity')) {
				$edit_modal.find('#Quantity').change();
			}
			
			// got to set a watch for tour products because we don't want people thinking they can edit the sectors if they are changing the Event or Product
			if ($edit_modal.find('.tour-sector-list')) {
				DoWatchForEventOrProductChange($edit_modal);
			}
		});
		
		$('#DataObject_EditPopup').on('hidden', function () {
			$(this).find('.modal-body').html('loading...');
		});
		
		function DoWatchForEventOrProductChange($edit_modal) {
			$edit_modal.on('change',function(){
				if ($edit_modal.find('.tour-sector-list').length === 0) {
					return;
				}
				window.initJ6LiveUpdate($edit_modal);
				$config_area = $edit_modal.find('.ProductConfig').first();
				$sector_table = $edit_modal.find('.tour-sector-list').first();
				$table_id = $sector_table.attr('id');
				$id_parts = $table_id.split('-');
				$event = $config_area.find('[name="item_'+$id_parts[2]+'[EventID]"]');
				$current_event = $edit_modal.find('[name="CurrentEventID"');
				if ($event.length === 0) {
					$event = $config_area.find('[name="EventID"]');
				}
				$item_pickup = $edit_modal.find('div#PickupID');
				if ($event.length > 0 && $current_event.length > 0) {
					if ($event.val() !== $current_event.val()) {
						$sector_table.hide();
						if ($item_pickup.length > 0) {
							$item_pickup.show();
						}
					} else {
						$sector_table.show();
						if ($item_pickup.length > 0) {
							$item_pickup.hide();
						}
					}
				} else {
					$sector_table.hide();
					if ($item_pickup.length > 0) {
						$item_pickup.show();
					}
				}
			});
		}
	}
	
});