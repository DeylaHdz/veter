<?php
include("conn.php");
include("user.php");
$user1= new user($_POST['email'], $_POST['password']);


if(empty($_POST['name'])||empty($_POST['email']||empty('password'))){
echo "error";
}
else{
    $insert= $user1-> registro($conn,$_POST['name']);
if($insert==false){
    echo "Algo salio mal";
    header("location:../registro.html");
}
else{
    echo "Conectese";
    header("location:../login.html");
}
}

?>