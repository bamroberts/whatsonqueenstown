
			<ul class="tabstrip nav nav-tabs tab-blue ">
				<% control Tabs %>
					<li class="$FirstLast $MiddleString <% if Pos = 1 %><% else %>blurry<% end_if %>">
						<a href="#$id" id="tab-$id">$Title</a>
						<% if Pos = 1 %><% else %><div class="ajax-loader-tab"></div><% end_if %>
					</li>
				<% end_control %>
			</ul>
				<% control Tabs %>
					<div class="tab <% if Pos = 1 %>active<% end_if %>" id="$id" <% if Pos = 1 %><% else %>style="display:none"<% end_if %>>
					<% if Tabs %>
						$TwitterBootstrapFieldHolder
					<% else %>
						<% control Fields %>
						$TwitterBootstrapFieldHolder
						<% end_control %>
					<% end_if %>
					</div>
				<% end_control %>
		