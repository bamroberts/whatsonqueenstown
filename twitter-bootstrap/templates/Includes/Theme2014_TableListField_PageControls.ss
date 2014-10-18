<% if ShowPagination %>
	<% if TotalCount %>
	<div class="dataTables_paginate paging_bootstrap">
		<ul class="pagination">
			<% if FirstLink %>
			<li class="prev">
            <div class="PageControls inline-div">
               <a href="$FirstLink" title="<% _t('VIEWFIRST', 'View first') %> $PageSize">
                  <i class="icon-double-angle-left"></i> 
               </a>
            </div>
			</li>
			<% else %>
			<li class="prev disabled">
				<span><i class="icon-double-angle-left"></i></span>
			</li>
			<% end_if %>
			<% if PrevLink %>
				<li>
               <div class="PageControls inline-div">
                  <a href="$PrevLink" title="<% _t('VIEWPREVIOUS', 'View previous') %> $PageSize">
                     <i class="fa fa-angle-left"></i> 
                  </a>
               </div>
				</li>
			<% else %>
				<li class="disabled">
					<span><i class="fa fa-angle-left"></i></span>
				</li>
			<% end_if %>
			<li class="disabled">
				<a href="#">
					<% _t('DISPLAYING', 'Displaying') %> $FirstItem <% _t('TO', 'to') %> $LastItem <% _t('OF', 'of') %> $TotalCount
				</a>
			</li>
			<% if NextLink %>
				<li class="next">
               <div class="PageControls inline-div">
                  <a href="$NextLink" title="<% _t('VIEWNEXT', 'View next') %> $PageSize"> 
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
				</li>
			<% else %>
				<li class="next disabled">
					<span><i class="fa fa-angle-right"></i></span>
				</li>
			<% end_if %>
			<% if LastLink %>
				<li class="next">
               <div class="PageControls inline-div">
                  <a href="$LastLink" title="<% _t('VIEWLAST', 'View last') %> $PageSize"> 
                     <i class="icon-double-angle-right"></i>
                  </a>
               </div>
				</li>
			<% else %>
				<li class="next disabled">
					<span><i class="icon-double-angle-right"></i></span>
				</li>
			<% end_if %>
			
		</ul>
	</div>
	<% end_if %>
<% end_if %>