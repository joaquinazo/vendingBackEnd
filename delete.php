<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Backend</title>
		<script src="https://use.typekit.net/oix2qfh.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<?php 
		include 'php.php';

		$clave= $_REQUEST['clave'];
		echo $clave;

	 ?>
		<h1 class="text-center" style="height:100px;">Backend</h1>
		<div class="container">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Are you sure you want to delete this row?</div>
			  <div class="panel-body">
			    <div class="btn-group btn-group-md" role="group" aria-label="...">
			    	<a class="btn btn-default" href="deleting.php?clave=<?php echo $clave; ?>" role="button">Yes</a>
			    	<a class="btn btn-default" href="#" role="button">No</a>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
		</div>
			

			
					</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>