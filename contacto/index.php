<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php 
          include("../assets/components/style-utilities.php");
        ?>

        <title>Contacto - Vet-Er</title>
    </head>
    <body class="bg-a_brass">

        <?php 
          include("../assets/components/navbar.php");
        ?>

        <main class="w-full grid grid-cols-1 md:grid-cols-2 justify-center p-5">
            <div class="max-md:w-full flex flex-col items-center justify-center md:mr-5">
                <form class="w-full h-full rounded-lg flex flex-col justify-center bg-buff p-8 shadow-2xl max-md:mt-10">
                <h2 class="text-4xl font-bold font-montserrat text-t_lavander mb-8 text-center">ENVIA TU MENSAJE</h2>
                <div class="flex flex-col text-t_lavander font-semibold py-2">
                    <label>Correo electrónico</label>
                    <input
                    class="rounded-lg mt-2 p-2 duration-100 focus:bg-a_brass focus:text-[#FFF] focus:outline-none"
                    type="text"
                    />
                </div>
                <div class="flex flex-col text-t_lavander font-semibold py-2">
                    <label>Asunto</label>
                    <input
                    class="mt-2 p-2 rounded-lg duration-100 focus:bg-a_brass focus:text-[#FFF] focus:outline-none"
                    type="password"
                    />
                </div>

                <div class="flex flex-col text-t_lavander font-semibold py-2">
                    <label>Comentario</label>
                    <textarea class="mt-2 p-2 rounded-lg duration-100 focus:bg-a_brass focus:text-[#FFF] focus:outline-none h-40"></textarea>
                </div>
                <button class="w-full my-5 py-2 bg-t_lavander text-buff shadow-md shadow-[#000]/50 hover:bg-p_blue hover:text-[#FFF] font-montserrat font-semibold rounded-lg duration-500">
                    INICIAR SESIÓN
                </button>
                </form>
            </div>
            <div class="bg-buff w-full rounded-lg flex flex-col justify-center bg-buff p-8 px-8 shadow-2xl max-md:mt-10">
                <h2 class="text-4xl font-bold font-montserrat text-t_lavander mt-8 text-center">CONTACTANOS</h2>
                <p class="font-montserrat text-t_lavander mt-2 mx-5">
                ¿Interesado en nuestros servicios? ¿Alguna sugerencia o duda que
                quieras decirnos? Puedes contactarnos a cualquiera de nosotros para
                ayudarte:
                </p>
                <div class="flex items-center flex-col">
                    <div class="w-full bg-a_brass rounded-lg shadow-md bg-a_brass my-5 md:mx-5">
                        <div class="flex flex-col items-center py-5">
                            <h5 class="mb-1 text-xl text-center font-bold text-buff font-montserrat">Deyla Hernandez Mata</h5>
                            <span class="text-sm text-center text-t_lavander font-montserrat">deylahdzm11@gmail.com</span>
                            <span class="text-sm text-center text-t_lavander font-montserrat">8681261365</span>
                        </div>
                    </div>
                    <div class="w-full bg-a_brass rounded-lg shadow-md bg-a_brass my-5 md:mx-5">
                        <div class="flex flex-col items-center py-5">
                            <h5 class="mb-1 text-xl text-center font-bold text-buff font-montserrat">Jose Alejandro Avalos Puga</h5>
                            <span class="text-sm text-center text-t_lavander font-montserrat">alejandroavalos2401@gmail.com</span>
                            <span class="text-sm text-center text-t_lavander font-montserrat">8683549472</span>
                        </div>
                    </div>
                    <div class="w-full bg-a_brass rounded-lg shadow-md bg-a_brass my-5 md:mx-5">
                        <div class="flex flex-col items-center py-5">
                            <h5 class="mb-1 text-xl text-center font-bold text-buff font-montserrat">Ruben Lorenzo Delgado Jimenez</h5>
                            <span class="text-sm text-center text-t_lavander font-montserrat">ruben@gmail.com</span>
                            <span class="text-sm text-center text-t_lavander font-montserrat">8681234567</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php 
          include("../assets/components/footer.php");
        ?>
        
    </body>
</html>