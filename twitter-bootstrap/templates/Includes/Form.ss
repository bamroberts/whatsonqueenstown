<% if IncludeFormTag %>
<form<% if extraClass %><% else %> class="form-horizontal"<% end_if %> $FormAttributes>
<% end_if %>
	<% if Message %>
		<div id="{$FormName}_error" class="alert alert-<% if MessageType = good %>success<% else %>$MessageType<% end_if %>">$Message</div>
	<% else %>
		<div id="{$FormName}_error" class="alert alert-$MessageType" style="display: none"></div>
	<% end_if %>
	
	<fieldset>
		<% if Legend %><legend>$Legend</legend><% end_if %> 
		<% control Fields %>
			$TwitterBootstrapFieldHolder
		<% end_control %>
		<div class="clear"><!-- --></div>
	</fieldset>

	<% if Actions %>
	<div class="Actions form-actions">
		<% control Actions %>
			$TwitterBootstrapField
		<% end_control %>
	</div>
	<% end_if %>
<% if IncludeFormTag %>
</form>
<% end_if %>