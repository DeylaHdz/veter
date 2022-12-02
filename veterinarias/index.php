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
    <body class="bg-buff">

        <?php 
          include("../assets/components/navbar.php");
        ?>

        <main class="p-20 h-screen">
          
          <div class="w-full max-w-sm bg-a_brass rounded-lg border border-gray-200 shadow-md">
              <div class="flex flex-col items-center py-10">
                  <img class="mb-3 w-24 h-24 p-2 rounded-full shadow-lg bg-white" src="../assets/img/vets/emerpet.png" alt="Logo Emerpet">
                  <h5 class="mb-1 text-xl font-medium text-buff">EmerPet</h5>
                  <span class="text-sm text-t_lavander font-bold">Veterinaria</span>
                  <span class="text-sm text-center mx-10 text-t_lavander">Tetuan 1, Valle de Casa Blanca, 87345 Heroica Matamoros, Tamps.</span>
                  <div class="flex mt-4 space-x-3 md:mt-6">
                      <a href="#twitter" class="btn btn-link btn-just-icon btn-neutral text-buff"><i class="fa fa-twitter"></i></a>
                      <a href="#google" class="btn btn-link btn-just-icon btn-neutral text-buff"><i class="fa fa-google-plus"></i></a>
                      <a href="https://www.facebook.com/Veterinaria-EmerPet-100587114638245" target="_blank" class="btn btn-link btn-just-icon btn-neutral text-buff"><i class="fa fa-facebook-square"></i></a>
                  </div>
              </div>
          </div>

        </main>

        <?php 
          include("../assets/components/footer.php");
        ?>
        
    </body>
</html>