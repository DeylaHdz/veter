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