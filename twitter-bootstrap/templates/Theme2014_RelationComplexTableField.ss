<div id="$id" class="$CSSClasses" href="$CurrentLink">
	<% if Markable %>
		<% include TableListField_SelectOptions %>
	<% end_if %>
	<% include Theme2014_TableListField_PageControls %>
	<table class="data table table-striped table-bordered">
		<thead>
			<tr>
				<% if Markable %><th width="18">&nbsp;</th><% end_if %>
				<% control Headings %>
				<th class="$Name">$Title</th>
				<% end_control %>
				<% if Can(show) %>
					<th width="18">&nbsp;</th>
				<% else %>
					<% if Can(edit) %>
						<th width="18">&nbsp;</th>
					<% else %>
						<% if Can(delete) %><th width="18">&nbsp;</th><% end_if %>
					<% end_if %>
				<% end_if %>
			</tr>
		</thead>
		<tfoot>
			<% if HasSummary %>
			<tr class="summary">
				<% if Markable %><th width="18">&nbsp;</th><% end_if %>
				<td><i>$SummaryTitle</i></td>
				<% control SummaryFields %>
					<td<% if Function %> class="$Function"<% end_if %>>&nbsp;</td>
				<% end_control %>
				<% if Can(show) %>
					<th width="18">&nbsp;</th>
				<% else %>
					<% if Can(edit) %>
						<th width="18">&nbsp;</th>
					<% else %>
						<% if Can(delete) %><th width="18">&nbsp;</th><% end_if %>
					<% end_if %>
				<% end_if %>
			</tr>
			<% end_if %>
			<% if Can(add) %>
			<tr>
				<% if Markable %><td width="18">&nbsp;</td><% end_if %>
				<td colspan="$ItemCount">
					<input type="hidden" id="{$id}_PopupHeight" value="$PopupHeight" disabled="disabled">
					<input type="hidden" id="{$id}_PopupWidth" value="$PopupWidth" disabled="disabled">
					<a class="popuplink addlink btn btn-primary" href="$AddLink" alt="<% _t('ADD', 'Add') %>">
						<i class="icon-plus-sign icon-white"></i>
						<% _t('ADD', 'Add') %> $Title
					</a>
					<% if Can(export) %>
						<a href="$ExportLink" target="_blank" class="btn btn-default"><i class="icon-download"></i> <% _t('CSVEXPORT', 'Export list to CSV' ) %></a>
					<% end_if %>
				</td>
				<% if Can(show) %>
					<th width="18">&nbsp;</th>
				<% else %>
					<% if Can(edit) %>
						<th width="18">&nbsp;</th>
					<% else %>
						<% if Can(delete) %><th width="18">&nbsp;</th><% end_if %>
					<% end_if %>
				<% end_if %>
			</tr>
			<% end_if %>
		</tfoot>
		<tbody>
			<% if Items %>
			<% control Items %>
					
						<% include Theme2014_TableListField_Item %>
					
			<% end_control %>
			<% else %>
				<tr class="notfound">
					<% if Markable %><th width="18">&nbsp;</th><% end_if %>
					<td colspan="$Headings.Count"><i><% _t('NOTFOUND', 'No items found') %></i></td>
					<% if Can(show) %>
						<th width="18">&nbsp;</th>
					<% else %>
						<% if Can(edit) %>
							<th width="18">&nbsp;</th>
						<% else %>
							<% if Can(delete) %><th width="18">&nbsp;</th><% end_if %>
						<% end_if %>
					<% end_if %>
				</tr>
			<% end_if %>
		</tbody>
	</table>
	$ExtraData
</div>
