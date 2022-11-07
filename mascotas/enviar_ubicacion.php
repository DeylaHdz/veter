<?php 
    
    require_once '../php/conn.php';
    
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $id = $_POST["id"];

    $sql = "INSERT INTO ubicaciones(latitude, longitude, pet) VALUES (?, ?, ?);";

    $insert=$conn->prepare($sql);
    $insert->bind_param("ssi", $latitude, $longitude, $id);
    $insert->execute();
    $rows=$insert->affected_rows;
    $insert->close();
    
    $conn -> close();

?>

<script>
    window.open(`/veter/mascotas/cartilla.php?id=${<?php echo $id; ?>}`,"_self");
</script>