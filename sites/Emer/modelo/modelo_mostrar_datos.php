<?php

 $ID_mascota = $_POST['ID_mascota'];

require '../conector/conexion.php';

$consulta ="SELECT * FROM pet_list WHERE id='$ID_mascota'";
                        $resultado= mysqli_query($conn,$consulta);
                        if($resultado==TRUE){
                            while($row=$resultado->fetch_array()){
                $ID_mascota = $row['id'];
                $nombre = $row['nombre'];
                $especie = $row['especie'];
                $raza= $row['raza'];
                $sexo= $row['sexo'];
                $color= $row['color'];
                $alergias= $row['alergias'];

?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Nombre : </td>
		<td> <?php echo $nombre; ?></td>
	</tr>

	<tr>
		<td> Especie: </td>
		<td> <?php echo $especie; ?></td>
	</tr>

	<tr>
		<td> Raza : </td>
		<td> <?php echo $raza; ?></td>
	</tr>
	<tr>
		<td> Sexo : </td>
		<td> <?php echo $sexo; ?></td>
	</tr>
	<tr>
		<td> Color : </td>
		<td> <?php echo $color; ?></td>
	</tr>
</table>
<?php
							}}
?>