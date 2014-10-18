<% if IncludeFormTag %>
<form<% if extraClass %><% else %> class="form-horizontal"<% end_if %> $FormAttributes tabindex="-1" role="dialog" aria-labelledby="$Legend" aria-hidden="true">
<% end_if %>
	<div class="modal-header">
    	<a class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
    	<% if Legend %><h3>$Legend</h3><% end_if %>
    </div>
    <div class="modal-body">
		<% if Message %>
			<div id="{$FormName}_error" class="alert alert-<% if MessageType = good %>success<% else %>$MessageType<% end_if %>">$Message</div>
		<% else %>
			<div id="{$FormName}_error" class="alert alert-$MessageType" style="display: none"></div>
		<% end_if %>
		
		<fieldset>
			
			<% control Fields %>
				$TwitterBootstrapFieldHolder
			<% end_control %>
			<div class="clear"><!-- --></div>
		</fieldset>
	</div>
	<div class="modal-footer">
		<% if Actions %>
		
			<% control Actions %>
				$TwitterBootstrapField
			<% end_control %>
		<% end_if %>
		<a class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
	</div>
<% if IncludeFormTag %>
</form>
<% end_if %>