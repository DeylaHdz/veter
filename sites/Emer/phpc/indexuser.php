<?php
$inc = include("../PHP/conn.php");
session_start();
$email= $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
  header("Location:../index.html");}
?>
<?php if($inc){
    $consulta ="SELECT * FROM emper_users WHERE email='$email'";
    $resultado= mysqli_query($conn,$consulta);
    if($resultado==TRUE){
        while($row=$resultado->fetch_array()){
            $name=$row['name'];}}}
            ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-COMPATIBLE" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
        <link rel="icon" type="image/png" href="../../../assets/img/vets/emerpet.png"> 
        <title>Veterinaria EmerPet</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    </head>
    <body class="landing-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " >
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="indexuser.php" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
                <div style="text-align:center;"><img src="../../../assets/img/emerpet.png"
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
                    <a class="nav-link" rel="tooltip" title="Consulta la informacion de tu mascota" data-placement="bottom" href="../vista/vista_menu.php">
                      Mascota
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="Cita.php" >
                      Citas
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial" target="_blank">
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
          <div class="page-header" data-parallax="true" style="background-image: url('../../../assets/img/close-up-hand-holding-dog-paw.jpg');">
            <div class="filter"></div>
            <div class="container">
              <div class="motto text-center">
                <h1>Bienvenido a EmerPet</h1>
                <h3><?php echo $name; ?></h3>
                <br />
                <a href="mascota.php" class="btn btn-outline-neutral btn-round"></i>Comenzar</a>
              </div>
            </div>
          </div>

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
