<?php 
    
    require_once '../php/conn.php';
    
    $id = $_GET["id"];

    $sql = "SELECT pets.id, pets.nombre, pet_type.tipo, pets.sexo, pets.fecha_nacimiento, pets.raza, pets.color, pets.peso, pets.alergias, pets.profile_pic, CONCAT(owners.nombre, ' ', owners.apellido_pat, ' ', owners.apellido_mat) AS owner, owners.telefono, owners.email FROM ( (pets INNER JOIN pet_type ON pets.tipo = pet_type.id) INNER JOIN owners ON pets.owner = owners.id ) WHERE pets.id = ?";

    $select = $conn -> prepare($sql);
    $select -> bind_param("i", $id);
    $select -> execute() or die($conn -> error);

    $info = $select -> get_result() -> fetch_assoc();
    
    $conn -> close();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <?php 
        include("../assets/components/style-utilities.php");
    ?>

    <title><?php echo $info['nombre']; ?>  |  Vet-Er</title>
  </head>
  <body>

    <main class="flex justify-between w-full h-full max-md:p-[30px] md:p-20 flex-row max-[768px]:flex-col font-montserrat box-border bg-a_brass">
      <div class="flex flex-col items-center text-center text-2xl bg-buff text-t_lavander p-[30px] rounded-[20px] md:w-1/3 md:mr-10">
        <img
          src="../assets/files/pet-pic/<?php echo $info['profile_pic']; ?>"
          alt=""
          class="h-64 w-64 object-cover object-center rounded-full border-solid border-[#FFF] border-4 max-md:w-45 max-md:h-45"
        ></img>
        <ul class="mt-8 text-center">
          <li class="md:mt-12 list-none">
            <h4 class="font-bold">Mascota:</h4>
            <?php echo $info['nombre']; ?>
          </li>
          <li class="mt-12 list-none">
            <h4 class="font-bold">Dueño:</h4>
            <?php echo $info['owner']; ?>
          </li>
        </ul>
        <div class="bg-[#FFF] mt-12">
            <div id="qrcode" class="p-2"></div>
        </div>
        <a class="bg-t_lavander text-buff font-montserrat font-bold0 px-6 py-2 mx-4 hover:bg-p_blue hover:text-[#FFF] rounded text-xl mt-5 cursor-pointer" id="link" >
          Descargar QR
        </a>
      </div>

      <div class="flex flex-col max-md:text-center text-2xl bg-buff text-t_lavander p-[30px] rounded-[20px] max-[768px]:mt-[20px] md:w-2/3">
        <ul class="list-none">
          <h1 class="uppercase text-5xl font-medium lg:text-left max-[768px]:text-center">
            ACERCA DE MI
          </h1>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Tipo de mascota</h3>
          <li class="list-none "><?php echo $info['tipo']; ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Sexo</h3>
          <li class="list-none"><?php echo ($info['sexo'] == "M") ? "Macho" : "Hembra"; ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Fecha de nacimiento:</h3>
          <li class="list-none"><?php echo date("d/m/Y", strtotime($info['fecha_nacimiento'])); ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Raza</h3>
          <li class="list-none"><?php echo $info['raza']; ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Color</h3>
          <li class="list-none"><?php echo $info['color']; ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Peso</h3>
          <li class="list-none"><?php echo $info['peso']; ?> kg.</li>
        </ul>

        <ul class="mt-[20px]">
          <h3 class="font-bold">Alergias</h3>
          <li class="list-none"><?php echo $info['alergias']; ?></li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Enfermedades anteriores</h3>
          <li class="list-none">Ninguna</li>
        </ul>

        <ul class="mt-[40px]">
          <h1 class="uppercase text-5xl font-medium lg:text-left max-[768px]:text-center">
            DATOS DE MI DUEÑO
          </h1>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Télefono de contacto:</h3>
          <li class="list-none text-ellipsis overflow-hidden">
            <a class="text-a_brass" href="tel:<?php echo $info['telefono']; ?>">
              <?php echo $info['telefono']; ?>
            </a>
          </li>
        </ul>
        <ul class="mt-[20px]">
          <h3 class="font-bold">Correo electrónico de contacto:</h3>
          <li class="list-none text-ellipsis overflow-hidden">
            <a class="text-a_brass" href='mailto:<?php echo $id; ?>'>
              <?php echo $info['email']; ?>
            </a>
          </li>
        </ul>
      </div>

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
            text: "192.168.1.71/veter/mascotas/localizar.php?id=<?php echo $info['id']; ?>",
            width: 220,
            height: 220,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });

        const link = document.querySelector("#link");

        setTimeout(() => {
            link.download = "QR-<?php echo $info['nombre'] ?>";
            link.href = qr.querySelector("img").src;
        }, 50);
        
    </script>

    </body>
</html>