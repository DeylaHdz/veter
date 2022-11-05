<?php

$ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';

$sql = mysql_query("SELECT * FROM usuario WHERE ID_usuario='$ID_usuario'");
$row = mysql_fetch_array($sql);

echo "!! Desea Eliminar a ";
echo $nombre = $row['nombre']; 
echo " "; echo $apellido = $row['apellido'];

echo " ? ";


?>
<input type="hidden" id="ID_usuario" value="<?php echo $ID_usuario;?>">