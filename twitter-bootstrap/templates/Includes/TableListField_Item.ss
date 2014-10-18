<% if Can(View) %>
	<tr id="record-$Parent.id-$ID"<% if HighlightClasses %> class="$HighlightClasses"<% end_if %>>
		<!-- Original -->
		<% if Markable %><td width="16" class="$SelectOptionClasses">$MarkingCheckbox</td><% end_if %>
		<% control Fields %>
			<td class="field-$Title.HTMLATT $FirstLast $Name">
			<% if First %>
				<% if editLink %>
					<a href="$editLink" class="hidden">Edit</a>
				<% end_if %>
			<% end_if %>
			$Value
			</td>
		<% end_control %>
		<% control Actions %>
			<td width="16" class="action<% if Label = Edit %> default<% end_if %>">
					<% if Label = Edit %>
						<% if IsAllowed %>
						<a class="btn hover-expand $Class" href="$Link" data-tooltip title="$Label this item">
							<i class="icon-pencil"></i>		
							<span class="btn expand">
								<i class="icon-pencil"></i>
								<span> Edit</span>
							</span>	
						</a>
						<% else %>
							<span class="btn disabled $Class"><i class="icon-pencil"></i></span>
						<% end_if %>
					<% else_if Label = Delete %>
						<% if IsAllowed %>
						<a class="btn hover-expand btn-danger $Class" href="$Link" data-tooltip title="$Label this item">
							<i class="icon-remove icon-white"></i>
							<span class="expand btn btn-danger">
								<i class="icon-remove icon-white"></i>
								<span> Delete</span>
							</span>
						</a>
						<% else %>
							<span class="btn disabled btn-danger $Class"><i class="icon-remove icon-white"></i></span>
						<% end_if %>
						
					<% else_if Label = Show %>
						<a class="btn <% if IsAllowed %>hover-expand <% else %>disabled <% end_if %> $Class" href="$Link" data-tooltip title="$Label this item">
							<i class="icon-search"></i>
							<% if IsAllowed %>
							<span class="btn expand">
								<i class="icon-search"></i>
								<span> Show</span>
							</span>
							<% end_if %>
						</a>
					<% else %>
					<a class="$Class" href="$Link"<% if TitleText %> title="$TitleText"<% end_if %>>
						<% if Icon %><img src="$Icon" alt="" /><% else %>$Label<% end_if %>
					</a>
					<% end_if %> 
				</td>
		<% end_control %>
	</tr>
<% end_if %>