<?php
class mascota
{
    

    //funcion de insertado de registros
    function InserI($conn, $email_owner, $Name, $Especie, $Raza, $Sexo, $Color, $Allergias)
    {
        $query="INSERT INTO `pet_list` ( `email_owner`, `nombre`, `especie`, `raza`, `sexo`, `color`,`alergias`)
        VALUES ('$email_owner', '$Name', '$Especie','$Raza', '$Sexo', '$Color', '$Allergias')";

        $insert=$conn->query($query) or die("hay un error en la funcion de insertado". $conn->error);

        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
?>