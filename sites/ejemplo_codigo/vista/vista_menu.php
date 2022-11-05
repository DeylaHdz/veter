<!DOCTYPE html>
<html>
<head>
	<title> Proyecto </title>


</head>
<body>
	<h1> Bienvenido al proyecto </h1>

    <div class="col-lg-6 col-md-8 xs-12">
    	<h3 align="center"> Consultar Datos Mascota</h3>
    	<button class="btn btn-info btn-md" onclick="btn_listar_datos();"> Listar </button>
        <button class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal_selector"> Selector </button>
    	<div id="panel_listado">
    		<!-- Panel de datos -->

    	</div>
    </div>
	</div>

</body>
</html>

<!-- Modal -->
<div>
<div id="myModal_selector" class="modal-content" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color:white;">
        <button type="button" class="close" data-dismiss="modal" data-backdrop="false">&times;</button>
        <h4 class="modal-title"> Selector </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion </p>
        <select class="form-control" id="select_usuario" onchange="select_usuario();">
        <option value=""> Seleccione </option>
            <?php

            require '../conector/conexion.php';

            $sql_s = mysql_query("SELECT * FROM usuario ORDER BY id");
            while ($row_s = mysql_fetch_array($sql_s)) {
                $ID_usuario = $row_s['id'];
                $nombre = $row_s['nombre'];
                ?>

                <option value="<?php echo $ID_usuario; ?>"> <?php echo $nombre; ?></option>

                <?php
            }

            ?>
        </select>
        <div id="panel_selector"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="btn_eliminar_dato();"> Eliminar </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" data-backdrop="false"> Cerrar </button>
       
      </div>
    </div>

  </div>
</div>