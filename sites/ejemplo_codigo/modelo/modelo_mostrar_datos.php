<?php

 $ID_usuario = $_POST['ID_usuario'];

require '../conector/conexion.php';
$consulta_u= "SELECT * FROM pet_list ";
$sql_u = mysqli_query($conn,$consulta_u);

$row_u = mysqli_fetch_array($sql_u);

$nombre = $row_u['nombre'];
$apellido = $row_u['raza'];
$edad = $row_u['edad'];
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Nombre : </td>
		<td> <?php echo $nombre; ?></td>
	</tr>

	<tr>
		<td> Apellidos : </td>
		<td> <?php echo $apellido; ?></td>
	</tr>

	<tr>
		<td> Edad : </td>
		<td> <?php echo $edad; ?></td>
	</tr>
</table>
<?php

?>