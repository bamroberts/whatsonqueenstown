<% if Form %>
	
	<h1>$Action.Capitalize $ModelNameSingular</h1>
	
	<ul>
		<% if canCurrentUserView %>
		<li><a href="$Link">View</a></li>
		<% end_if %>
		<% if canCurrentUserEdit %>
		<li><a href="$Link(edit)">Edit</a></li>
		<% end_if %>
		<% if canCurrentUserDelete %>
		<li><a href="$Link(delete)">Delete</a></li>
		<% end_if %>
	</ul>
	
	$Form
	
<% else %>
	
	<h1>$Title</h1>
	
	<% if canCurrentUserCreate %>
	<a href="$Link(add)">Add</a>
	<% end_if %>
	
	<% if ModelSearchResults %>
		<ul>
		<% control ModelSearchResults %>
			<li><a href="$Link">$Title</a></li>
		<% end_control %>
		</ul>
	<% end_if %>

<% end_if %>