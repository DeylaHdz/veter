<?php
include("conn.php");
include("user.php");
$user1= new user($_POST['email'], $_POST['password']);
session_start();
$_SESSION['usuario']=$_POST['email'];



if(empty($_POST['email']||empty('password'))){
echo "error";
}
else{
    $login= $user1-> loginuser($conn);
if($login==false){
    echo "Algo salio mal";
}
else{
    header("location:../phpc/indexuser.php");
}
}

?>