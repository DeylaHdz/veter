<?php
$inc = include("../PHP/conn.php");
session_start();
$email_owner= $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}
  

$ID_mascota = $_POST['ID_mascota'];

$consulta= "SELECT * FROM pet_list WHERE email_owner='$email_owner' AND id='$ID_mascota'";
            $i =0;
            $resultado= mysqli_query($conn,$consulta);
            if($resultado==TRUE){
                while ($row = mysqli_fetch_array($resultado)) {
                $nombre = $row['nombre']; 
                $ID_mascota = $row['id'];
                $nombre = $row['nombre'];
                $especie = $row['especie'];
                $raza= $row['raza'];
                $sexo= $row['sexo'];
                $color= $row['color'];
                $alergias= $row['alergias'];

}}

?>
<input type="hidden" id="ID_usuario" value="<?php echo $ID_mascota ?>">
<label for="nombre"> Nombre </label>
<input type="text" class="form-control" id="nombre_ed" placeholder="* Nombre " value="<?php echo $nombre; ?>">
