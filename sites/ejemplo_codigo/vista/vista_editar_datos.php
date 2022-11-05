<?php

$ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';

$sql = mysql_query("SELECT * FROM usuario WHERE ID_usuario='$ID_usuario'");
$row = mysql_fetch_array($sql);

$nombre = $row['nombre']; 
$apellido = $row['apellido'];
$edad = $row['edad'];

?>
<input type="hidden" id="ID_usuario" value="<?php echo $ID_usuario; ?>">
<label for="nombre"> Nombre </label>
<input type="text" class="form-control" id="nombre_ed" placeholder="* Nombre " value="<?php echo $nombre; ?>">
