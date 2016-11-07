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
		<h1 class="text-center" style="height:100px;">Backend</h1>
		<div class="container">
			<div class="row" style="height: 100px;">
			  <div class="col-md-4 text-center"><a style="color: black;" href="index.php">Status</a></div>
			  <div class="col-md-4 text-center"><a style="color: black;" href="update.php">Delete</a></div>
			  <div class="col-md-4 text-center"><a style="color: black;" href="localizacion.html">Modify</a></div>
			</div>
		</div>
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding-right:20px; border-right: 1px solid #ccc;">
			
			<h2>Dispensador</h2>
			<table class="table table-condensed" >
				<?php
	     		include 'php.php';
	     		$sql = "SELECT * FROM dispensador";
				$result = $conexion->query($sql);
				$i=1;
				echo "<tr>
					<th>#</th>
				    <th>Clave</th>
				    <th>Nombre</th> 
				    <th>Precio</th>
				    <th>Cantidad</th>
				    <th>Accion</th>
				    </tr>
  					";
				if ($result->num_rows > 0) {
				    
					while($row = $result->fetch_assoc()) {
							echo "<tr><td><strong>".$i++."</strong></td>";
					        echo "<td>".$row['clave']."</td>";
					        echo "<td>".$row['nombre']."</td>";
					        echo "<td>".$row['precio']."</td>";
					        echo "<td>".$row['cantidad']."</td>";
					         echo '<td width=250>';
                                echo ' ';
                                echo '<a class="btn btn-warning boton" href="update2.php?clave='.$row['nombre'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning boton" href="delete.php?clave='.$row['clave'].'">Delete</a>';
                                echo '</td>';
					        echo "</tr>";
						}

					}
				?>
			</table>
			</div>
			
			 
	
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			
						<h2>Deposito</h2>

			<table class="table table-condensed">
				<?php
	     		include 'php.php';
	     		$sql = "SELECT * FROM deposito";
				$result = $conexion->query($sql);
				$new_array = 0;
				$i=1;
				echo "<tr>
					<th>#</th>
				    <th>Id</th>
				    <th>Nombre</th> 
				    <th>Valor</th>
				    <th>Cantidad</th>
				    <th>Accion</th>
				    </tr>
  					";
				if ($result->num_rows > 0) {
				    
					while($row = $result->fetch_assoc()) {
							echo "<tr><td><strong>".$i++."</strong></td>";
					        echo "<td>".$row['id']."</td>";
					        echo "<td>".$row['nombreMoneda']."</td>";
					        echo "<td>".$row['valor']."</td>";
					        echo "<td>".$row['cantidad']."</td>";
					        echo '<td width=250>';
                                echo ' ';
                                echo '<a class="btn btn-warning boton" href="update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning boton" href="delete.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
						

					        echo "</tr>";
						}


					}
				?>
			</table>
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