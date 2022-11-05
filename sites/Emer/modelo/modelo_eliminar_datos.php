<?php
$inc = include("../PHP/conn.php");
session_start();
$email= $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}
  

$ID_mascota = $_POST['ID_mascota'];

require '../conector/conexion.php';

 $sql = mysqli_query($conn,"DELETE FROM pet_list WHERE id = $ID_mascota ");
 
 if($sql == TRUE){
 	echo "Eliminacion Correcta XD";
 }
?>