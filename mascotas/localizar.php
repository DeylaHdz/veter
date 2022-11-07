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

  <div class="fixed inset-0 z-10 overflow-y-auto">
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
</div>


<script src="../assets/js/geo.js"></script>

</body>
</html>