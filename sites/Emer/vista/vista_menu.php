<?php
$inc = include("../PHP/conn.php");
session_start();
$email_owner= $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Veterinaria EmerPet</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <meta http-equiv="x-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/vets/emerpet.png"> 
    <title>Veterinaria EmerPet</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="../../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="../css/resgistro_estilo">
	  
	  <script type="text/javascript" src="../librerias/bootstrap/js/jquery.min.js"></script>
	  <script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="../controlador/control_usuario.js"></script>

</head>
<body class="landing-page sidebar-collapse">

    <nav class="navbar navbar-expand-lg bg-emer">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="indexuser.php" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
            <div style="text-align:center;"><img src="../../../assets/img/emerpert_blanco.png"
              width="200px"
              ></div>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="../phpc/indexuser.php" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="../phpc/cuenta.php" class="nav-link">Cuenta</a>
              </li>
              <li class="nav-item">
                <a title="Consulta la disponibilidad de Productos" href="#" class="nav-link">Productos</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Consulta la informacion de tu mascota" data-placement="bottom" href="vista_menu.php" >
                  Mascota
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="../phpc/Cita.php">
                  Citas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="#">
                  Contacto
                </a>
              </li>
              <li class="nav-item">
                <a href="../PHP/logout.php" class="btn btn-success btn-round">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Consultar Datos Mascota</h5>
              </div>
              <div class="card-body">


    	<button class="btn btn-success btn-round" onclick="btn_listar_datos();"> Listar </button>
        <button class="btn btn-success btn-round" data-toggle="modal" data-target="#myModal_selector"> Informacion </button>
    	<div id="panel_listado">
    		<!-- Panel de datos -->

    	</div>

	</div>
  </div>
            </div>
          </div>

    <!--agregar-->
    <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Añadir mascota</h5>
              </div>
              <div class="card-body">
                <form action="../phpc/formulario_mascota.php" method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre de la mascota</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre de la mascota" value="">
                      </div>
                    </div>

                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Especie</label>
                        <div>
                          <label>
                            <input type="radio" id="Perro" name="especie" value="Perro" onchange="displayQuestion(this.value)" />Perro</label>
                          </br>
                          <label>
                            <input type="radio" id="Gato" name="especie" value="Gato" onchange="displayQuestion(this.value)" />Gato</label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Raza</label>

                        <div id="PerroQuestion"  style="display:none;" >
                          <select name="raza" class="form-control">
                              <option>Mixto</option>
                              <option>Labrador</option>
                              <option>Pug</option>
                              <option>Husky</option>
                              <option>Chihuahua</option>
                              <option>Otro</option>
                          </select>
                        </div>
                      
                        <div id="GatoQuestion" style="display:none;">
                          <select name="raza" class="form-control" >
                            <option>Mixto</option>
                            <option>Persa</option>
                            <option>Siames</option>
                            <option>Angora</option>
                          </select>
                        </div>

                      </div>
                    </div>

                  </div>

         
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Sexo</label>
                        <select type="text" name="sexo" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                          <option>Macho</option>
                          <option>Hembra</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Color</label>
                        <input type="text" name="color" class="form-control" placeholder="Color" value="Color">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Alergias</label>
                        <input type="text" name="alergias" class="form-control" placeholder="Alergias">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Agregar Mascota</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      
      <!--footer-->
    <footer class="footer   footer-white ">
        <div class="container">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="../../index.html" target="_blank">Vet-Er</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Vet-Er
              </span>
            </div>
          </div>
        </div>
      </footer>

    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/jquery.min.js" type="text/javascript"></script>
      <script src="../../../assets/js/core/popper.min.js" type="text/javascript"></script>
      <script src="../../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	    <script type="text/javascript" src="../controlador/control_usuario.js"></script>
      <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
      <script src="../../../assets/js/plugins/bootstrap-switch.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="../../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
      <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
      <script src="../../../assets/js/plugins/moment.min.js"></script>
      <script src="../../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
      <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
      <script src="../../../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
      <!--  Google Maps Plugin    -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <script>
        $(document).ready(function() {

          if ($("#datetimepicker").length != 0) {
            $('#datetimepicker').datetimepicker({
              icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
              }
            });
          }

          function scrollToDownload() {

            if ($('.section-download').length != 0) {
              $("html, body").animate({
                scrollTop: $('.section-download').offset().top
              }, 1000);
            }
          }
        });
      </script>
       <script>
        function displayQuestion(answer) {

            document.getElementById(answer + 'Question').style.display = "block";
          
            if (answer == "Perro") {
          
              document.getElementById('GatoQuestion').style.display = "none";
          
            } else if (answer == "Gato") {
          
              document.getElementById('PerroQuestion').style.display = "none"; // I've just researched how to do this
          
            }
          
          }
        </script>
</body>
</html>

<!-- Modal -->
<div id="myModal_selector" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #084B8A; color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Selector </h4>
      </div>
      <div class="modal-body">
        <p> Seleccion </p>
        <select class="form-control" id="select_usuario" onchange="select_usuario();">
        <option value=""> Seleccione </option>
            <?php

            require '../conector/conexion.php';
            $consulta= "SELECT * FROM pet_list WHERE email_owner='$email_owner'";
            $i =0;
            $resultado= mysqli_query($conn,$consulta);
            if($resultado==TRUE){
                while ($row_s = mysqli_fetch_array($resultado)) {
              $ID_mascota = $row_s['id'];
                $nombre = $row_s['nombre'];
                ?>

                <option value="<?php echo $ID_mascota; ?>"> <?php echo $nombre; ?></option>

                <?php
            }
          }
            ?>
        </select>
        <div id="panel_selector"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="btn_eliminar_dato();"> Eliminar </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
       
      </div>
    </div>

  </div>
</div>