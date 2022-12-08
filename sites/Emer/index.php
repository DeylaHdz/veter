<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-COMPATIBLE" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
        <link rel="icon" type="image/png" href="../../assets/img/vets/emerpet.png"> 
        <title>EmerPet</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <?php 
          include("../../assets/components/style-utilities.php");
        ?>
    </head>
    <body class="landing-page sidebar-collapse">
      <?php 
          include("assets/components/navbar_emer.php");
        ?>
          <!-- End Navbar -->
          <div class="bg-[url('assets/img/close-up-hand-holding-dog-paw.jpg')] w-full h-screen bg-cover bg-center">
            <div class="w-full h-screen bg-[#00000080] flex justify-center items-center">
              <div class="motto text-center">
                <h1>Bienvenido a EmerPet</h1>
                <h3>Unete a nuestra familia y obten los beneficios de ser cliente!</h3>
                <br />
                <a href="registro.html" class="btn btn-outline-neutral btn-round"></i>Registrarse</a>
              </div>
            </div>
          </div>
          <?php 
            include("assets/components/footer_emer.php");
          ?>

        <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../../assets/js/plugins/moment.min.js"></script>
    <script src="../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
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
