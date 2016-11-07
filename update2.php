<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Backend</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.boton{
				color: black;
				background-color:#FFFFFF;
				border-color: black;
				-webkit-transition-duration: 0.4s; /* Safari */
   				transition-duration: 0.4s;
			}
			.boton:hover {
			    background-color: black; /* Green */
			    color: white;
			    border-color: black;

			}
		</style>
	</head>
	<body>
	
	<?php 
			include 'php.php';

			$clave= $_REQUEST['clave'];
			echo $clave;
			$sql = "SELECT * FROM maquina.dispensador WHERE nombre = '$clave'"; 
			$result = $conexion->query($sql);
			

			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        $nombre = $row["nombre"];
			        $cantidad = $row["cantidad"];
			        $precio = $row["precio"];
			    }
			} else {
			    echo "0 results";
			}
						

	?>
		 		
		<h1 class="text-center" style="height:100px;">Update</h1>


<form class="form-horizontal">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">Id</label>  
  <div class="col-md-4">
  <input id="id" name="id" type="text" placeholder="placeholder" class="form-control input-md" value=<?php echo $clave; ?>  >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" type="text" placeholder="placeholder" class="form-control input-md" value=<?php echo $nombre; ?>>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valor">Precio</label>  
  <div class="col-md-4">
  <input id="valor" name="valor" type="number" placeholder="placeholder"  class="form-control input-md" value=<?php echo $precio; ?>>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cantidad">Cantidad</label>  
  <div class="col-md-4">
  <input id="cantidad" name="cantidad" type="number" placeholder="placeholder" class="form-control input-md" value=<?php echo $cantidad; ?>>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-warning boton">Update</button>
  </div>
</div>

</form>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>