<?php
	require_once '../../../secrets/dbs.php';

	$conn = new mysqli($db1['server'], $db1['user'], $db1['password'], 'vet_er');

	if($conn -> connect_error){
		die("Conexión fallida: " . $conn -> connect_error);
	}
    
    $conn -> set_charset("utf8");
?>