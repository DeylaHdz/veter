
<table class="table table-bordered">
	<tr>
		<th> # </th>
		<th> Nombre </th>
		<th> Especie</th>
		<th> Raza </th>
    <th> Sexo </th>
		<th> </th>
	</tr>
<?php

require '../conector/conexion.php';
$consulta= "SELECT * FROM pet_list ORDER BY id DESC";
$sql = mysqli_query($conn,$consulta);
$i =0;
while ($row = mysqli_fetch_array($sql)) {
	$i++;
	$ID_usuario = $row['id'];
	$nombre = $row['nombre'];
	$especie = $row['especie'];
	$raza= $row['raza'];
  $sexo= $row['sexo'];
  $color= $row['color'];
  $alergias= $row['alergias'];
	?>
     <tr>
     <td> <?php echo $i; ?></td>
     	<td> <?php echo $nombre; ?></td>
     	<td> <?php echo $especie; ?></td>
     	<td> <?php echo $raza; ?></td>
     	<td> <?php echo $sexo; ?></td>
     	<td class="col-lg-1"> 
     		 
     		 <button class="btn btn-primary btn-xs" style="width: 100%;" data-toggle="modal" data-target="#myModal_editar" onclick="btn_editar('<?php echo $ID_usuario; ?>');"> Editar </button>
     		 
     		 <button class="btn btn-danger btn-xs" style="width: 100%; margin-top: 1%;" data-toggle="modal" data-target="#myModal_eliminar" onclick="btn_eliminar('<?php echo $ID_usuario; ?>');"> Eliminar </button>
     	</td>
     </tr>
	<?php
}

?>
</table>

<!-- Modal -->
<div id="myModal_editar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color: white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Modal Editar </h4>
      </div>
      <div class="modal-body">
        <p> Edicion .</p>
        <div id="panel_editar"></div>
        <div id="panel_respuesta_edicion"></div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-info" onclick="btn_guardar_edicion();"> Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="myModal_eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: red; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Eliminar</h4>
      </div>
      <div class="modal-body">
        <p> Eliminar </p>
        <div id="panel_eliminar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="btn_eliminar_dato();"> Eliminar </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
       
      </div>
    </div>

  </div>
</div>