<% if MoreThanOnePage %>
<div class="pagination">
	<span class="page_no">
		Page 
		<% control Pages %>
			<% if CurrentBool %>
				$PageNum
			<% end_if %>
		<% end_control %>
		of $Pages.Count 
	</span>
	<ul class="pag_list">
		<% if PrevLink %>
			<li class="previous"><a href="$PrevLink">&laquo; Previous</a></li>
		<% else %>
			<li class="previous-off">&laquo; Previous</li>
		<% end_if %>
		<% control PaginationSummary(4) %>
			<% if CurrentBool %>
				<li><a href="$Link" class="active">$PageNum</a></li> 
			<% else %> 
				<li><a href="$Link">$PageNum</a></li>
			<% end_if %>
		<% end_control %>
		<% if NextLink %>
			<li class="next"><a href="$NextLink">Next &raquo;</a></li>
		<% else %>
			<li class="next-off">Next &raquo;</li>
		<% end_if %>
	</ul>											
</div>
<% end_if %>