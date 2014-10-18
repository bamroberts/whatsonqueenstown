<!-- twitter-bootstrap/templates/ComplexTableField.ss -->
<div id="$id" class="$CSSClasses field" href="$CurrentLink">
  <div class="middleColumn">
		<% if Markable %>
			<% include TableListField_SelectOptions %>
		<% end_if %>
	<% include Theme2014_TableListField_PageControls %>
	<table class="data table table-striped table-bordered">
		<thead>
			<tr>
				<% if Markable %><th width="18">&nbsp;</th><% end_if %>
				<% control Headings %>
				<th class="$Name">
					<% if IsSortable %>
						<span class="sortTitle">
							<a href="$SortLink">$Title</a>
						</span>
						<span class="sortLink <% if SortBy %><% else %>sortLinkHidden<% end_if %>">
							<a href="$SortLink">
								<% if SortDirection = desc %>
								<img src="cms/images/bullet_arrow_up.png" alt="<% _t('SORTASC', 'Sort ascending') %>" />
								<% else %>
								<img src="cms/images/bullet_arrow_down.png" alt="<% _t('SORTDESC', 'Sort descending') %>" />
								<% end_if %>
							</a>
							&nbsp;
						</span>
					<% else %>
						$Title
					<% end_if %>
				</th>
				<% end_control %>
				<% control Actions %><th width="18" class="action">&nbsp;</th><% end_control %>
			</tr>
		</thead>
		<tfoot>
			<% if HasSummary %>
			$getParentRecord.setRecordCurrency
			<tr class="summary">
				<% if Markable %><th width="18">&nbsp;</th><% end_if %>
				<td><i>$SummaryTitle</i></td>
				<% control SummaryFields %>
					<td<% if Function %> class="$Function"<% end_if %>>$SummaryValue</td>
				<% end_control %>
				<% control Actions %><td width="18" class="action">&nbsp;</td><% end_control %>
			</tr>
			$getParentRecord.unsetRecordCurrency
			<% end_if %>
			<% if Can(add) %>
			<tr>
				<% if Markable %><td width="18">&nbsp;</td><% end_if %>
				<td colspan="$ItemCount">
					<input type="hidden" id="{$id}_PopupHeight" value="$PopupHeight" disabled="disabled">
					<input type="hidden" id="{$id}_PopupWidth" value="$PopupWidth" disabled="disabled">
					<% if Utility %>
					<% control Utility %>
						<span class="item"><a href="$Link" target="_blank" class="btn btn-default"><i class="clip-download"></i> $Title</a></span>
					<% end_control %>
					<% end_if %>
					<a class="popuplink addlink btn btn-primary" href="$AddLink" alt="add">
						<i class="icon-plus-sign icon-white"></i>
						<% sprintf(_t('ADDITEM', 'Add %s', PR_MEDIUM, 'Add [name]'),$Title) %>
					</a>
				</td>
				<% control Actions %><td width="18" class="action">&nbsp;</td><% end_control %>
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
					<td colspan="$Headings.Count"><i><% _t('NOITEMSFOUND', 'No items found') %></i></td>
					<% control Actions %><td width="18" class="action">&nbsp;</td><% end_control %>
				</tr>
			<% end_if %>
		</tbody>
	</table>
	</div>
</div>
