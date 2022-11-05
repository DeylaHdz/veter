<?php
 $ID_usuario = $_POST['ID_usuario'];
 $nombre = $_POST['nombre']; 
 $apellido = $_POST['apellido']; 
 $edad = $_POST['edad'];

 require '../conector/conexion.php';

 $sql = mysql_query("
UPDATE `usuario` SET `nombre` = '$nombre', `apellido` = '$apellido', `edad` = '$edad' WHERE `usuario`.`ID_usuario` = $ID_usuario");
 
 if($sql == TRUE){
 	echo "Edicion Correcto XD";
 }
?>