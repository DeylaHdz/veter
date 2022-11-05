<?php

 $nombre = $_POST['nombre']; 
 $apellido = $_POST['apellido']; 
 $edad = $_POST['edad'];

 require '../conector/conexion.php';

 $sql = mysql_query("INSERT INTO `usuario` (`ID_usuario`, `nombre`, `apellido`, `edad`) VALUES (NULL, '$nombre', '$apellido', '$edad')");

 if($sql == TRUE){
 	echo "Registro Correcto XD";
 }

?>