<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<% base_tag %>
	    <meta content="text/html; charset=utf-8" http-equiv="Content-type"/> 
	    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />		
	    <style>
	    	#fade { display: none; }
	    </style>
		<% require block(sapphire/jquery-ui/jquery.ui.core.js) %>
		<% require block(sapphire/thirdparty/jquery/jquery.js) %>
		<% require block(sapphire/javascript/jquery_improvements.js) %>
		<% require block(sapphire/css/Form.css) %>
		<% require block(dataobject_manager/css/dataobject_manager.css) %>
		<% require block(dataobject_manager/javascript/dataobjectmanager_popup.js) %>
		<% require block(cms/css/cms_right.css) %>
		<% require block(cms/css/typography.css) %>
		
		<link rel="stylesheet" type="text/css" href="junction6/thirdparty/select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="twitter-bootstrap/thirdparty/datepicker/css/datepicker.css" />
		<link rel="stylesheet" type="text/css" href="junction6/thirdparty/bootstrap/less/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="twitter-bootstrap/thirdparty/bootstrap/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="twitter-bootstrap/css/twitter-bootstrap-adjustments.css" />
		<link rel="stylesheet" type="text/css" href="junction6/css/layout.css" />
		
		<style>
			body { background: white; padding: 10px; }
		</style>
	</head>
	<body class="DataObjectManager-popup loading <% if String %><% if NestedController %>nestedController<% end_if %><% else %><% if DetailForm.NestedController %>nestedController<% end_if %><% end_if %>	">
		<% if methodName = edit %>
			<h1>Editing '$dataObj.Title'</h1>
		<% end_if %>
		<% if methodName = add %>
			<h1>Adding $addTitle</h1>
		<% end_if %>
		<% if methodName = deleted %>
			<h1>Item Deleted</h1>
		<% end_if %>
		<hr>
		<div class="right $PopupClasses">
			$DetailForm
		</div>
		<% if HasPagination %>
		<ul class="pager">
			<% if PrevRecordLink %>
				<li class="previous">
					<a href="$PrevRecordLink">&larr; <% _t('PREVIOUS','Previous') %></a>
				</li>
			<% end_if %>
			<% if NextRecordLink %>
				<li class="next">
					<a href="$NextRecordLink"><% _t('NEXT','Next') %> &rarr;</a>
				</li>
			<% end_if %>
		</ul>
		<% end_if %>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="/sapphire/javascript/jquery_improvements.js"></script>
		<script type="text/javascript" src="/twitter-bootstrap/thirdparty/bootstrap/js/bootstrap.min.js"></script>

<!-- commented out since it has been included already at the php-level		
<script type="text/javascript" src="twitter-bootstrap/thirdparty/datepicker/js/bootstrap-datepicker.js"></script>
-->		
<script type="text/javascript" src="junction6/thirdparty/select2/select2.js"></script>
		<script type="text/javascript" src="/junction6/javascript/scripts.js"></script>
	</body>
</html>
