<?php

            $server = "localhost";
            $usuario = "root";
            $pass = "root";
            $BD = "maquina";
            //variable que guarda la conexión de la base de datos
            $conexion = mysqli_connect($server, $usuario, $pass, $BD); 
            //Comprobamos si la conexión ha tenido exito
            if(!$conexion){ 
               echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>'; 
            } 


            
 ?>