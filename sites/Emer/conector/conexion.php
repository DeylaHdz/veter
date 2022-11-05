<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vet-er";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection error: ".$conn->connect_error);
}

?>
<!--$servername="sql100.epizy.com";
$username="root";
$password="zaErApVdhqcKp";
$dbname="epiz_32266491_emerpet";-->