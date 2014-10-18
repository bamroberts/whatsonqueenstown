<% if Can(View) %>
	<tr id="record-$Parent.id-$ID" class="<% if HighlightClasses %>$HighlightClasses<% end_if %>">
		<!-- J6-2014 -->
		<% if Markable %><td width="16" class="$SelectOptionClasses">$MarkingCheckbox</td><% end_if %>
		<% control Fields %>
         <% if Title = ViewLink %>
         <% else %>
            <td class="field-$Title.HTMLATT $FirstLast $Name">
            <% if First %>
               <% if editLink %>
                  <a href="$editLink" class="hidden">Edit</a>
               <% end_if %>
            <% end_if %>
            $Value
            </td>
         <% end_if %>
		<% end_control %>
		<% if Actions %>
		<td width="16" class="action<% if Label = Edit %> default<% end_if %>">
			<% control Actions %>
				<% if Label = Edit %>
					<% if IsAllowed %>
					<a class="btn btn-teal btn-sm tooltips $Class" data-original-title="Edit" data-placement="top" href="$Link">
						<i class="fa fa-edit"></i>
					</a>
					<% end_if %>
				<% else_if Label = Delete %>
					<% if IsAllowed %>
					<a href="$Link" class="btn btn-sm btn-bricky tooltips deletelink $Class" data-placement="top" data-original-title="Remove">
						<i class="fa fa-times fa fa-white"></i>
					</a>
					<% end_if %>
					
				<% else_if Label = Show %>
					
					<a href="$Link" class="btn btn-sm btn-green tooltips $Class" data-placement="top" data-original-title="Show">
						<i class="fa clip-search-3 fa fa-white"></i>
					</a>
					
				<% else %>
				<a class="$Class" href="$Link"<% if TitleText %> title="$TitleText"<% end_if %>>
					<% if Icon %><img src="$Icon" alt="" /><% else %>$Label<% end_if %>
				</a>
				<% end_if %> 
			<% end_control %>
		</td>
		<% end_if %>
	</tr>
<% end_if %>