<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php 
          include("../assets/components/style-utilities.php");
        ?>

        <title>Veterinarias - Vet-Er</title>
    </head>
    <body class="bg-p_blue">

        <?php 
          include("../assets/components/navbar.php");
        ?>

        <main>
          <section class="overflow-hidden m-10 text-center border border-gray-200 shadow-md bg-a_brass rounded-lg">
            <h2 class="font-montserrat text-xl text-t_lavander font-bold mt-10">Ayudar X Ayudar</h2>
            <h4 class="font-montserrat text-md text-buff">Albergue para perros</h4>
            <a href="https://www.facebook.com/unidosrescatistas" target="_blank" class="text-buff"><i class="fa fa-facebook-square text-xl hover:text-p_blue duration-500"></i></a>
            <div class="container px-2 py-2 mx-auto lg:py-14 lg:px-32">
              <div class="flex flex-wrap -m-1 md:-m-2">
                <div class="flex flex-wrap w-1/2">
                  <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/1.jpeg">
                  </div>
                  <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/2.jpeg">
                  </div>
                  <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/3.jpeg">
                  </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                  <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/4.jpeg">
                  </div>
                  <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/5.jpeg">
                  </div>
                  <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                      src="../assets/img/adopta-img/ayudarxayudar/6.jpeg">
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>

        <?php 
          include("../assets/components/footer.php");
        ?>
        
    </body>
</html>