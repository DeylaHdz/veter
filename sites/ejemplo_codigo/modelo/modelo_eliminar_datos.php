<?php
$ID_usuario = $_POST['$ID_usuario'];

require '../conector/conexion.php';

 $sql = mysqli_query($conn,"DELETE FROM `pet_list` WHERE `id` = $ID_usuario ");
 
 if($sql == TRUE){
 	echo "Eliminacion Correcta XD";
 }
?>