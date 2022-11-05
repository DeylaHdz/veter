<?php
include("conn.php");
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location:../index.html");
}
$username= $_SESSION['usuario'];
    $sql ="SELECT name from users where email='$username'";
    $resultado = $conn->query($sql);
    $row=$resultado->fetch_assoc();
    if(isset($row['name'])){
        $username = $row['name'];
    }

?>
