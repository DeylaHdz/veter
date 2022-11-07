<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php 
          include("../assets/components/style-utilities.php");
        ?>

        <title>Iniciar sesión - Vet-Er</title>
    </head>
    <body>

        <?php 
          include("../assets/components/navbar.php");
        ?>

        <main class="bg-a_brass w-full h-screen grid grid-cols-1 md:grid-cols-2">
            <div class="hidden md:block">
                <img class="w-full h-full object-cover" src="../assets/img/login_img.jpg" alt="Imagen de Login">
            </div>

            <div class="bg-a_brass flex flex-col justify-center">
                <form class="max-w-[400px] w-full mx-auto rounded-lg bg-buff p-8 px-8 shadow-2xl">
                <h2 class="text-4xl font-bold font-montserrat text-t_lavander mb-8 text-center">
                    ACCEDER
                </h2>
                <div class="flex flex-col text-t_lavander font-semibold py-2">
                    <label>Correo electrónico</label>
                    <input
                    class="rounded-lg mt-2 p-2 duration-100 focus:bg-a_brass focus:text-[#FFF] focus:outline-none"
                    type="text"
                    />
                </div>
                <div class="flex flex-col text-t_lavander font-semibold py-2">
                    <label>Contraseña</label>
                    <input
                    class="mt-2 p-2 rounded-lg duration-100 focus:bg-a_brass focus:text-[#FFF] focus:outline-none"
                    type="password"
                    />
                </div>
                <div class="flex justify-between text-t_lavander hover:text-a_brass font-semibold py-2 mt-2 duration-500">
                    <p>¿Olvidaste tu contraseña?</p>
                </div>
                <button class="w-full my-5 py-2 bg-t_lavander text-buff shadow-lg shadow-[#000]/50 hover:bg-p_blue hover:text-[#FFF] font-montserrat font-semibold rounded-lg duration-500">
                    INICIAR SESIÓN
                </button>
                </form>
            </div>
        </main>

        <?php 
          include("../assets/components/footer.php");
        ?>
        
    </body>
</html>