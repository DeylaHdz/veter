<?php
include("../PHP/conn.php");
include("mascota_funciones.php");

$mascota1 = new mascota();
session_start();

$email_owner= $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}

$insert=$mascota1->InserI($conn, $email_owner,$_POST['nombre'], $_POST['especie'], $_POST['raza'], $_POST['sexo'], $_POST['color'], $_POST['alergias']);
header("Location: ../vista/vista_menu.php");
if($insert==false)
{
    echo "hay un error";
}
else{
    die();
}
?>