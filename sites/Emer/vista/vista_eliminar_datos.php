<?php
$inc = include("../PHP/conn.php");
session_start();
$email= $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}
  

$ID_mascota = $_POST['ID_mascota'];

require '../conector/conexion.php';

$sql = mysqli_query($conn,"SELECT * FROM `pet_list` WHERE `id`='$ID_mascota'");
$row = mysqli_fetch_array($sql);

echo "!! Desea Eliminar a ";
echo $nombre = $row['nombre']; 
echo " ? ";


?>
<input type="hidden" id="ID_mascota" value="<?php echo $ID_mascota;?>">