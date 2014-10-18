<!DOCTYPE html>
<html lang="en">
  <head>
	<% base_tag %>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whats on QT - $Title</title>

    <!-- Bootstrap -->
    <link href="whatson/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.media {
			border: 1px solid #ccc;
			background-color: white;
		}
		
		.media-pad > * {
			
			padding: 3px;
		}
		
		.media-footer {
			background-color:#eee;
			display:block;
			padding:3px;
		}
		.day {
			padding-bottom:20px;
			border-radius:20px;
		}

		.day1 {
			border: 1px solid rgba(200,50,50,0.8);
			background-color: rgba(200,50,50,0.1);
		}

g.glyphicon {border:2px solid red; border-radius:10px; padding:3px;}
span.glyphicon b {
	font-size: 15px;
	position: relative;
	top: -2px;
}

.truncate {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.media-footer .btn {padding: 0px 2px;}
		
	</style>
  </head>
  <body>
    
	<div class="container">
		<div class="page-header">
			<h1>Whats on QT</h1>
		</div>
		$Layout
		
		</div>
			
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="whatson/js/bootstrap.min.js"></script>
	<script>
		$('[data-toggle="tooltip"]').tooltip();
	</script>
  </body>
</html>