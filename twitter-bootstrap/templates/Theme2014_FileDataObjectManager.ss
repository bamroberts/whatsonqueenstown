<div id="$id" class="RequestHandler FormField DataObjectManager FileDataObjectManager TableListField $NestedType field" href="$CurrentLink">
	<div class="ajax-loader"></div>
		<% if Can(add) %>
			<a class="btn btn-xs btn-default popup-button" rel="$PopupWidth" href="$UploadLink" alt="upload">
				<i class="fa fa-plus"></i>
				<% _t('DataObjectManager.ADD','Add') %> $ButtonAddTitle

			</a>
			<% else %>
				<h3>$PluralTitle</h3>
		<% end_if %>
	<div class="dataobjectmanager-filter">
		<% if HasFilter %>$FilterDropdown<% end_if %>
	</div>
	<div style="clear:both;"></div>
	<div class="top-controls">
		<div class="rounded_table_top_right">
			<div class="rounded_table_top_left">
				<div class="view-controls btn-group">
					<a href="$ListLink" class="viewbutton btn btn-default btn-xs <% if ListView %>active<% end_if %>" title="<% _t('FileDataObjectManager.LISTVIEW', 'List view') %>">
						<i class="fa fa-list-alt "></i>
						
					</a>
					<a href="$GridLink" class="viewbutton btn btn-default btn-xs <% if GridView %>active<% end_if %>" title="<% _t('FileDataObjectManager.GRIDVIEW', 'Grid view') %>">
						<i class="fa fa-table "></i>
						
					</a>
				</div>
				<ul class="pagination">
               <% if FirstLink %>
               <li class="prev <% if FirstLink %><% else %>disabled<% end_if %>">
                  <a href="$FirstLink">
                     <i class="icon-double-angle-left"></i> 
                  </a>
               <% else %>
               <li class="prev <% if FirstLink %><% else %>disabled<% end_if %>">
                  <span><i class="icon-double-angle-left"></i></span>
               </li>
               <% end_if %>

               <% if PrevLink %>
               <li class="prev">
                  <a href="$PrevLink">
                     <i class="fa fa-angle-left"></i>
                  </a>
               </li>
               <% else %>
               <li class="prev disabled">
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
                  <a title="" href="$NextLink"> 
                     <i class="fa fa-angle-right"></i>
                  </a>
               </li>
               <% else %>
               <li class="next disabled">
                  <span><i class="fa fa-angle-right"></i></span>
               </li>
               <% end_if %>
					
               <% if LastLink %>
               <li class="next">
                  <a title="" href="$LastLink"> 
                     <i class="icon-double-angle-right"></i>
                  </a>
               </li>
               <% else %>
               <li class="next disabled">
                  <span><i class="icon-double-angle-right"></i></span>
               </li>
               <% end_if %>
				</ul>
				<!-- <div class="dataobjectmanager-search">
					<% if HasSearch %><span class="sbox_l"></span><span class="sbox"><input value="<% if SearchValue %>$SearchValue<% else %><% _t('DataObjectManager.SEARCH','Search') %><% end_if %>" type="text" class="srch_fld"  /></span><span class="sbox_r srch_clear"></span><% end_if %>
				</div> -->
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
	<div class="$ListStyle column{$Headings.Count}" style="width:100%;">
		<div class="dataobject-list">
			<ul <% if ShowAll %>class="sortable-{$sourceClass}"<% end_if %>>
				<% if ListView %>
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
				<% end_if %>
				<% if Items %>
				<% control Items %>
					<li class="data" id="record-$Parent.id-$ID">

						<% if Top.allowDragDrop %>
						<table class="drag-pointer">
							<tr id="record-Files-$ID">
								<td id="drag-Files-$ID" class="dragfile" style="float: left;">
									<img id="drag-img-Files-$ID" src="sapphire/images/drag.gif"/>
								</td>
							</tr>
						</table>
						<% end_if %>

						<!-- LIST VIEW -->
						<% if Top.ListView %>
							<div class="fields-wrap">
							<% control Fields %>
								<div class="col" {$ColumnWidthCSS}><div class="pad"><% if Value %>$Value<% else %>&nbsp;<% end_if %></div></div>
							<% end_control %>
							</div>
							<div class="actions col">
								<% include Actions %>
							</div>
						<!-- GRID VIEW -->
						<% else %>
							<div class="pad">
								<% if Top.ShowAll %><span class="handle"><img src="dataobject_manager/images/move_icon.jpg" /></span><% end_if %>
								<div class="file-icon"><a href="<% if CanViewOrEdit %>$EditLink<% else %>#<% end_if %>" rel="$PopupWidth" class="popup-button editlink tooltip"><img src="$FileIcon" alt="" /></a></div>
								<div class="file-label"><a href="<% if CanViewOrEdit %>$EditLink<% else %>#<% end_if %>" rel="$PopupWidth" class="popup-button editlink tooltip">$FileLabel</a></div>
								<% if Can(delete) %><div class="delete"><a href="$DeleteLink" class="delete-link"><img src="dataobject_manager/images/trash.gif" height="12px" alt="delete" /></a></div><% end_if %>
								<span class="tooltip-info" style="display:none">
									<% control Fields %>
										<strong>$Name</strong>: $Value<% if Last %><% else %><br /><% end_if %>
									<% end_control %>
								</span>
							</div>
						<% end_if %>
					</li>
				<% end_control %>
				<% else %>
						<li><em><% sprintf(_t('DataObjectManager.NOITEMSFOUND','No %s found'),$PluralTitle) %></em></li>
				<% end_if %>

			</ul>
		</div>
	</div>
	<div class="bottom-controls">
		<div class="rounded_table_bottom_right">
			<div class="rounded_table_bottom_left">
				<div class="sort-control">
					<% if Sortable %>
						<input id="showall-{$id}" type="checkbox" <% if ShowAll %>checked="checked"<% end_if %> value="<% if Paginated %>$ShowAllLink<% else %>$PaginatedLink<% end_if %>" /><label for="showall-{$id}"><% _t('DataObjectManager.DRAGDROP','Allow drag &amp; drop reordering') %></label>
					<% end_if %>
				</div>
				<div class="per-page-control">
					<% if ShowAll %><% else %>$PerPageDropdown<% end_if %>
				</div>

			</div>
		</div>
	</div>
</div>