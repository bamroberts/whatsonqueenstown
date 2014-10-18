
	<ul class="tabstrip nav nav-tabs tab-padding tab-space-3 tab-blue ">
	<% control Tabs %>
		<li class="$FirstLast $MiddleString <% if Pos = 1 %><% else %>blurry<% end_if %>"><a href="#$id" id="tab-$id">$Title</a></li>
	<% end_control %>
	</ul>

	<% control Tabs %>
		<div class="tab" id="$id">
		<% if Tabs %>
			$TwitterBootstrapFieldHolder
		<% else %>
			<% control Fields %>
			$TwitterBootstrapFieldHolder
			<% end_control %>
		<% end_if %>
		</div>
	<% end_control %>
