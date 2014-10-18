<div id="aside" class="span2">
	<% include Sidebar %>
</div>
<div id="main" class="span10">
	<div class="well">
		
		<% if Form %>
			<% include DataObjectControllerNavigation %>
			
			<h1>
				<% if OverideTitle %>
					$OverideTitle
				<% else %>
					$Heading
					$Action.Capitalize 
					<% if Record.Title %>
						'$Record.Title'
					<% else %>
						$ModelNameSingular
					<% end_if %>
				<% end_if %>
			</h1>
			
			$Message
			
			$Form
			
		<% else %>
			
			<h1>$Heading $Title</h1>
			
			$Message
			
			$ResultsForm
			<a class="btn btn-primary" href="$Link(add)">Add</a>
			<!--
			<% if ModelSearchResults %>
				<ul>
				<% control ModelSearchResults %>
					<li><a href="$Link">$Title</a></li>
				<% end_control %>
				</ul>
			<% end_if %>
			-->
		
		<% end_if %>
	</div>
</div>