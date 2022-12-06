<?php 

  $id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        include("../assets/components/style-utilities.php");
    ?>

    <title>Document</title>
</head>
<body class="bg-a_brass">
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed inset-0 z-10 overflow-y-auto" id="pedir">
        <div class="flex min-h-full justify-center p-4 text-center items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-a_brass px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 class="text-lg font-medium leading-6 text-buff" id="modal-title">Método de localización</h3>
                  <div class="mt-2">
                    <p class="text-sm text-t_lavander mb-2">El código QR que has escaneado de mi collar sirve para notificarle a mi dueño tu ubicación actual.</p>
                    <p class="text-sm text-t_lavander mb-2">Si no estoy acompañado de nadie, probablemente este perdido y me ayudarias mucho si permites enviar tu ubicación a mi dueño.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-t_lavander px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-buff px-4 py-2 text-base font-medium text-t_lavander shadow-sm hover:bg-p_blue hover:text-[#FFF] sm:ml-3 sm:w-auto sm:text-sm ease-in duration-300" id="btn_aceptar">Compartir</button>
              <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-a_brass px-4 py-2 text-base font-medium text-buff shadow-sm hover:bg-buff hover:text-a_brass  sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm ease-in duration-300" id="btn_rechazar">No compartir</button>
            </div>
          </div>
        </div>
      </div>

      <div class="fixed inset-0 z-10 overflow-y-auto hidden" id="enviar">
        <div class="flex min-h-full justify-center p-4 text-center items-center sm:p-0">
          <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-a_brass px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 class="text-lg font-medium leading-6 text-buff" id="modal-title">Ubicación obtenida</h3>
                  <div class="mt-2">
                    <p class="text-sm text-t_lavander mb-2">¡Gracias por cooperar! Ya tenemos tu ubicación</p>
                    <p class="text-sm text-t_lavander mb-2">Presiona el botón para enviar mi ubicación.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-t_lavander px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <form action="./enviar_ubicacion.php" method="post">
                <input type="text" id="latitude" name="latitude" class="hidden">
                <input type="text" id="longitude" name="longitude" class="hidden">
                <input type="text" id="id" name="id" class="hidden">
                <input type="submit" value="Enviar" class="inline-flex w-full justify-center rounded-md border border-transparent bg-buff px-4 py-2 text-base font-medium text-t_lavander shadow-sm hover:bg-p_blue hover:text-[#FFF] sm:ml-3 sm:w-auto sm:text-sm ease-in duration-300">
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  


  <script>
    const btn_aceptar = document.querySelector("#btn_aceptar");
    const btn_rechazar = document.querySelector("#btn_rechazar");

    const pedir = document.querySelector("#pedir");
    const enviar = document.querySelector("#enviar");


    const latitude = document.querySelector("#latitude");
    const longitude = document.querySelector("#longitude");
    const id = document.querySelector("#id");

    const showPosition = (position) => {
      latitude.value = position.coords.latitude;
      longitude.value = position.coords.longitude;

      id.value = <?php echo $id ?>;

      pedir.classList.add("hidden");
      enviar.classList.remove("hidden");
    }

    btn_aceptar.addEventListener("click", () => {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Su aplicación o navegador Web no soporta la geolocalización.")
        }
    });

    btn_rechazar.addEventListener("click", () => {
        window.open("/veter","_self");
    });
  </script>

</body>
</html>