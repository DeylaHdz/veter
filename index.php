<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
        
        <script src="assets/js/tailwind.js"></script>
        <script src="assets/js/tw-config.js"></script>
        
        <style type="text/tailwindcss">
            @layer utilities {
                @font-face {
                    font-family: "Montserrat";
                    src: url(assets/fonts/Montserrat-Regular.ttf);
                }
            }
        </style>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <title>Vet-Er</title>
    </head>
    <body>

        <?php 
          include("assets/components/navbar.php");
        ?>

        <main>
          <div class="bg-[url('assets/img/index-bg.jpg')] w-full h-screen bg-cover bg-center">
            <div class="w-full h-screen bg-[#00000080] flex justify-center items-center">
              <img src="assets/img/logo-index.png" alt="Logo Vet-Er" class="w-1/2 max-md:w-2/3 shadow-[#0ff]">
            </div>
          </div>

          <div class="w-full bg-p_blue font-montserrat max-lg:px-20 lg:px-96 pb-10">
            <h2 class="text-center font-bold text-4xl text-[#FFF] py-10">¿Qué es?</h2>
            <h5 class="text-center text-xl text-t_lavander">Vet-Er es una herramienta digital intuitiva que permite a los dueños estar al tanto de sus mascotas, además de ser un medio efectivo de comuciación veterinario-cliente.</h5>
          </div>

          <div class="w-full bg-[#0B1011] flex flex-row max-md:flex-col justify-between py-20">
            <div class="px-20 md:w-1/2 text-center">
              <i class="bi bi-people text-t_lavander text-4xl"></i>
              <h4 class="text-[#FFF] my-5 text-lg font-montserrat">Obten tu propio usuario</h4>
              <p class="text-[#FFF] font-montserrat">Podras tener tu propia sesión para administrar tus datos y los de tu compañero.</p>
            </div>
            <div class="px-20 max-md:mt-20 md:w-1/2 text-center">
              <i class="bi bi-heart-pulse text-t_lavander text-4xl"></i>
              <h4 class="text-[#FFF] my-5 text-lg font-montserrat">Control Médico</h4>
              <p class="text-[#FFF] font-montserrat">Podrás tener un control digital de el estado médico de tu mascota además de consultar en las veterinarias más cercanas a ti.</p>
            </div>
            <div class="px-20 max-md:mt-20 md:w-1/2 text-center">
              <i class="bi bi-postcard-heart text-t_lavander text-4xl"></i>
              <h4 class="text-[#FFF] my-5 text-lg font-montserrat">Consejos y recordatorios</h4>
              <p class="text-[#FFF] font-montserrat">Recordatorio de citas al veterinario y recomendaciones.</p>
            </div>
          </div>
        </main>

        <?php 
          include("assets/components/footer.php");
        ?>
        
    </body>
</html>