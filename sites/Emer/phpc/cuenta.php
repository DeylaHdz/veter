<?php
$inc = include("../PHP/conn.php");
session_start();
$email= $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}

if($inc){
    $consulta ="SELECT * FROM emper_users WHERE email='$email'";
    $resultado= mysqli_query($conn,$consulta);
    if($resultado==TRUE){
        while($row=$resultado->fetch_array()){
            $name=$row['name'];
          }
        }
      }
if($inc){
    $consulta1 ="SELECT count(id) FROM pet_list WHERE email_owner='$email'";
    $rowa= mysqli_query($conn,$consulta1);
    $row1 = mysqli_fetch_array($rowa);
    $total = $row1[0];
  }?>


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
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/vets/emerpet.png"> 
    <title>Veterinaria EmerPet</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="../../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="../css/resgistro_estilo">
</head>  

<body class="landing-page sidebar-collapse">

    <nav class="navbar navbar-expand-lg bg-emer">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="index.html" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
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
                <a href="indexuser.php" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="cuenta.php" class="nav-link">Cuenta</a>
              </li>
              <li class="nav-item">
                <a title="Consulta la disponibilidad de Productos" href="#" class="nav-link">Productos</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Consulta la informacion de tu mascota" data-placement="bottom" href="../vista/vista_menu.php" >
                  Mascota
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href=" cita.php">
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
      
      <div class="content1">
        <div class="row">
          <div class="col-md-4">
            <div class="card1 card-user1">
              <div class="image">
                <img src="../../../assets/img/close-up-hand-holding-dog-paw.jpg" alt="...">
              </div>
              <div class="card-body1">
                <div class="author1">
                  <a href="#">
                    <img class="avatar1 border-gray" src="../../../assets/img/default-avatar.png" alt="...">
                    <h5 class="title"><?php echo $name ?></h5>
                  </a>
                  <p class="description1">
                    
                  </p>
                </div>
                <p class="description1 text-center">
                  email:
                   <br>
                   <?php echo $email;?>
                   <br>
              </div>
              <div class="card-footer1">
                <hr>
                <div class="button-container1">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5> <br><small> </small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5><?php echo $total;?><br><small>Mascota</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5> <br><small> </small></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    </body>
</html>