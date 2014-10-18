<% if hideLabelColumn %>
	<ul class="SelectionGroup$extraClass">
		<% control FieldSet %>
			<li$Selected>
				{$RadioButton}{$RadioLabel}{$TwitterBootstrapFieldHolder}
			</li>
		<% end_control %>
	</ul>
<% else %>
<div class="controls">
	<% if IsReadonly %>
		<% control FieldSet %>
		<% if Selected %>
			<span class="readonly" id="Form_ViewForm_AllowPurchase">$FieldHolder</span>
		<% end_if %>
		<% end_control %>
	<% else %>
		<ul class="SelectionGroup$extraClass"><% control FieldSet %><li$Selected>{$RadioButton}{$RadioLabel}{$TwitterBootstrapFieldHolder}</li><% end_control %></ul>
	<% end_if %>
</div>
<% end_if %>