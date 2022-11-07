<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php 
          include("../assets/components/style-utilities.php");
        ?>

        <title>Planes - Vet-Er</title>
    </head>
    <body class="bg-p_blue">

        <?php 
          include("../assets/components/navbar.php");
        ?>

        <main class="container flex flex-wrap pt-4 pb-10 m-auto mt-6 md:mt-15 lg:px-12 xl:px-16">
            <div class="w-full px-0 lg:px-4">
                
                <h2 class="px-12 text-base font-bold text-center md:text-3xl text-[#FFF]">Plan de usuario</h2>
                <p class="py-1 text-lg text-center text-[#FFF] mb-5">Te ofrecemos los mejores planes para ti y tus mascotas.</p>

                <div class="flex flex-wrap items-center justify-center py-4 pt-0">
                    <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
                        <label class="flex flex-col rounded-lg shadow-lg group cursor-pointer hover:shadow-2xl bg-buff">
                            <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                <h3 class="mx-auto text-base font-semibold text-center underline text-t_lavander group-hover:text-white">Gratuito</h3>
                                <p class="text-5xl font-bold text-center group-hover:text-white text-t_lavander">$0</p>
                                <p class="text-xs text-center uppercase group-hover:text-white text-t_lavander">Al año</p>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-a_brass">
                                <ul class="px-10 text-buff">
                                    <li class="list-disc">2 registros para tus mascotas</li>
                                    <li class="list-disc">No incluye placa</li>
                                    <li class="list-disc">Acceso al catalogo de veterinarias más cercano.</li>
                                </ul>
                                <button class="rounded-full w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-t_lavander border border-transparent rounded text-buff">Crear cuenta</button>
                            </div>
                        </label>
                    </div>

                    <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                        <label class="flex flex-col rounded-lg shadow-lg cursor-pointer hover:shadow-2xl">
                            <div class="w-full px-4 py-8 rounded-t-lg bg-a_brass">
                                <h3 class="mx-auto text-base font-semibold text-center underline text-white group-hover:text-white">Premium</h3>
                                <p class="text-5xl font-bold text-center text-white">$700</span></p>
                                <p class="text-xs text-center uppercase text-white">Al año</p>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-t_lavander">
                                <ul class="px-10 text-buff">
                                    <li class="list-disc">+3 registros para tus mascotas</li>
                                    <li class="list-disc">3 placas de repuesto</li>
                                    <li class="list-disc">Descuento en algunas compras.</li>
                                    <li class="list-disc">Preferencia en citas con veterinarias.</li>
                                </ul>
                                <button class="rounded-full w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-buff border border-transparent rounded text-t_lavander">CONTRATAR</button>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="w-full px-0 lg:px-4">
                
                <h2 class="px-12 pt-10 text-base font-bold text-center md:text-3xl text-[#FFF]">Plan para veterinarias</h2>
                <p class="py-1 text-lg text-center text-[#FFF] mb-5">Siempre ten a tus clientes conextados. Estos planes estan ajustados a las necesidades de cada veterinaria</p>

                <div class="flex flex-wrap items-center justify-center py-4 pt-0">
                    <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
                        <label class="flex flex-col rounded-lg shadow-lg group cursor-pointer hover:shadow-2xl bg-buff">
                            <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                <h3 class="mx-auto text-base font-semibold text-center underline text-t_lavander group-hover:text-white">Básico</h3>
                                <p class="text-5xl font-bold text-center group-hover:text-white text-t_lavander">$6500</p>
                                <p class="text-xs text-center uppercase group-hover:text-white text-t_lavander">Al año</p>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-a_brass">
                                <ul class="px-10 text-buff">
                                    <li class="list-disc">Apartado personalizado <b>limitado</b> a: colores y logo de la veterinaria</li>
                                    <li class="list-disc">Agendar citas</li>
                                    <li class="list-disc">Acceso al control medico de los clientes.</li>
                                    <li class="list-disc">Citas por semana <b>limitado</b>.</li>
                                    <li class="list-disc">Un solo acceso.</li>
                                </ul>
                                <button class="rounded-full w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-t_lavander border border-transparent rounded text-buff">Contratar</button>
                            </div>
                        </label>
                    </div>

                    <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                        <label class="flex flex-col rounded-lg shadow-lg relative cursor-pointer hover:shadow-2xl">
                            <div class="w-full px-4 py-8 rounded-t-lg bg-a_brass">
                                <h3 class="mx-auto text-base font-semibold text-center underline text-white group-hover:text-white">Plus</h3>
                                <p class="text-5xl font-bold text-center text-white">$8000</span></p>
                                <p class="text-xs text-center uppercase text-white">Al año</p>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-t_lavander">
                                <ul class="px-10 text-buff">
                                    <li class="list-disc">Apartado personalizado.</li>
                                    <li class="list-disc">Agendar citas.</li>
                                    <li class="list-disc">Acceso al control medico de los clientes.</li>
                                    <li class="list-disc">Citas por semana <b>ilimitadas</b>.</li>
                                    <li class="list-disc">1 cuenta de administrador y 5 para personal.</li>
                                    <li class="list-disc">Apartado de compras.</li>
                                </ul>
                                <button class="rounded-full w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-buff border border-transparent rounded text-t_lavander">Contratar</button>
                            </div>
                        </label>
                    </div>

                    <div class="w-full p-4 md:w-1/2 lg:w-1/4 plan-card">
                        <label class="flex flex-col rounded-lg shadow-lg group relative cursor-pointer hover:shadow-2xl bg-buff">
                            <div class="w-full px-4 py-6 rounded-t-lg card-section-1">
                                <h3 class="mx-auto text-base font-semibold text-center underline text-t_lavander group-hover:text-white">Premium</h3>
                                <p class="text-5xl font-bold text-center group-hover:text-white text-t_lavander">$1000</p>
                                <p class="text-xs text-center uppercase group-hover:text-white text-t_lavander">Al año</p>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full h-full py-6 rounded-b-lg bg-a_brass">
                                <ul class="px-10 text-buff">
                                    <li class="list-disc">Apartado personalizado.</li>
                                    <li class="list-disc">Agendar citas.</li>
                                    <li class="list-disc">Acceso al control medico de los clientes.</li>
                                    <li class="list-disc">Citas por semana <b>ilimitadas</b>.</li>
                                    <li class="list-disc">Cuentas ilimitadas para personal y administradores.</li>
                                    <li class="list-disc">Apartado de compras.</li>
                                    <li class="list-disc">Mayor visualización para el sitio.</li>
                                </ul>
                                <button class="rounded-full w-5/6 py-2 mt-2 font-semibold text-center uppercase bg-t_lavander border border-transparent rounded text-buff">Contratar</button>
                            </div>
                        </label>
                    </div>

                </div>
            </div>
        </main>

        <?php 
          include("../assets/components/footer.php");
        ?>
        
    </body>
</html>