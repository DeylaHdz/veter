

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/veter/assets/css/fondo.css" rel="stylesheet" />
    <?php 
        include("../assets/components/style-utilities.php");
    ?>

    <title><?php echo $info['nombre']; ?></title>
  </head>
  <body>

    <?php include("../assets/components/navbar.php");
        ?>

    <main class="flex justify-between w-full h-full max-md:p-[30px] md:p-20 flex-row max-[768px]:flex-col font-montserrat box-border font_color">
     

    </main>

    <!-- <div class="window_bg">
        <div class="window_content">
            <h2>AVISO</h2>
            <p>Si has escaneado este código QR y mi dueño no esta cerca de mi, posiblemente estoy perdido.</p>
            <p>En caso de que yo esté perdido, tienes la posibilidad de enviar un correo a mi dueño con tu ubicación para encontrarme, esto solo se habilitara si lo deseas al darle al botón de "Aceptar".</p>
            <p>Al contrario, si no deseas compartir tu ubicación o no estoy perdido, dale al botón de "Ignorar" y podras continuar sin compartir tu ubicación.</p>
            <p>Puedes ponerte en contacto con mi dueño de igual manera viendo sus datos en la parte inferior de esta página.</p>

            <div class="btn_geo">
                <button id="btn_aceptar">Aceptar</button>
                <button id="btn_ignorar">Ignorar</button>
            </div>
        </div>
    </div> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script type="text/javascript">
        const qr = document.getElementById("qrcode");

        var qrcode = new QRCode(qr, {
            text: "https://app.utmatamoros.edu.mx/veter/mascotas/cartilla.php?id=<?php echo $info['id']; ?>",
            width: 220,
            height: 220,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.L
        });

        const link = document.querySelector("#link");

        setTimeout(() => {
            link.download = "QR-<?php echo $info['nombre'] ?>";
            link.href = qr.querySelector("img").src;
        }, 50);
        
    </script>

    </body>
</html>