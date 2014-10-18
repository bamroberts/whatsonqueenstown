<div id="$id" class="RequestHandler FormField DataObjectManager $NestedType field" href="$CurrentLink">
	<div class="ajax-loader"></div>
	<div class="<% if HasFilter %>filter<% end_if %>">
		<% if Can(add) %>	
			<a class="popup-button btn btn-xs btn-primary pull-right" rel="$PopupWidth" href="$AddLink" alt="add">
				<i class="fa fa-plus"></i> <% sprintf(_t('DataObjectManager.ADDITEM','Add %s',PR_MEDIUM,'Add [name]'),$AddTitle) %>
			</a>	
			<h3>$PluralTitle</h3>
		<% else %>
		  <h3>$PluralTitle</h3>
		<% end_if %>
	</div>
	<% if HasFilter %>
		<div class="dataobjectmanager-filter">
			$FilterDropdown
		</div>
	<% end_if %>
	<div style="clear:both;"></div>
	<div class="top-controls">
		<div class="rounded_table_top_right">
			<div class="rounded_table_top_left">
			<% if Sortable %>
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
						<% _t('DataObjectManager.DISPLAYING', 'Displaying') %> $FirstItem <% _t('DataObjectManager.TO', 'to') %> $LastItem <% _t('DataObjectManager.OF', 'of') %> $TotalCount
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
				<!--
				Removed search box as search currently not working
				<div class="dataobjectmanager-search">
					<% if HasSearch %>
						<label>
							Search:
						</label>
						<input value="<% if SearchValue %>$SearchValue<% else %><% _t('DataObjectManager.SEARCH','Search') %><% end_if %>" type="text" class="srch_fld"  />
						
					<% end_if %>
				</div>
				-->
				<div style="clear:both;"></div>
			<% end_if %>
			</div>
		</div>
	</div>
	<div class="list column{$Headings.Count} list-holder" style="width:100%;">
		<div class="dataobject-list">		
			<ul class="<% if ShowAll %>sortable-{$sourceClass}<% end_if %><% if ClickToToggle %> toggleSelect<% end_if %>">
				<li class="head">
					<div class="fields-wrap">
					<% control Headings %>
					<div class="col $FirstLast" {$ColumnWidthCSS}>
						<div class="pad">
								<% if IsSortable %>
								<a href="$SortLink">$Title &nbsp;
								<% if IsSorted %>
									<% if SortDirection = ASC %>
									<img src="cms/images/bullet_arrow_up.png" alt="" />
									<% else %>
									<img src="cms/images/bullet_arrow_down.png" alt="" />
									<% end_if %>
								<% end_if %>
								</a>
								<% else %>
								$Title
								<% end_if %>
						</div>
					</div>
					<% end_control %>
					</div>
					<div class="actions col">&nbsp;</div>
				</li>
			<% if Items %>
			<% control Items %>
				<li class="" id="record-$Parent.id-$ID">
						<div class="fields-wrap handle">
						<% control Fields %>
						<div class="col" {$ColumnWidthCSS}><div class="pad"><% if Value %>$Value<% else %>&nbsp;<% end_if %></div></div>
						<% end_control %>
						</div>
						<div class="actions col">
								<% include Actions %>
						</div>
				</li>
			<% end_control %>
			<% else %>
					<li><i><% sprintf(_t('DataObjectManager.NOITEMSFOUND','No %s found'),$PluralTitle) %></i></li>
			<% end_if %>
		</ul>
		</div>
	</div>
	<div class="bottom-controls">
		<div class="rounded_table_bottom_right">
			<div class="rounded_table_bottom_left">
				<div class="pull-left">
					<a class="btn btn-default" href="$ExportLink"><% sprintf(_t('DataObjectManager.EXPORT','Export %s'),$PluralTitle) %></span></a>
				</div>
				<% if Sortable %>
					<div class="sort-control">
						<input id="showall-{$id}" type="checkbox" <% if ShowAll %>checked="checked"<% end_if %> value="<% if Paginated %>$ShowAllLink<% else %>$PaginatedLink<% end_if %>" /><label for="showall-{$id}"><% _t('DataObjectManager.DRAGDROP','Allow drag &amp; drop reordering') %></label>
					</div>
				<% end_if %>
				<div class="per-page-control">
					<% if ShowAll %><% else %>$PerPageDropdown<% end_if %>
				</div>
			</div>
		</div>
	</div>
</div>
