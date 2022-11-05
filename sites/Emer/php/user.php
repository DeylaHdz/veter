<?php
class user{   
    public $email_user;
    public $pass_user;

    function __construct($m,$p){
        $this-> email_user=$m;
        $this-> pass_user=$p;

    }
    
    function loginuser($conn){
        $query= "SELECT COUNT(*) from emper_users where email='$this->email_user' AND password='$this->pass_user'";
        $login= $conn -> query($query) or die ("Error ".$conn->error);
        if($login){
            return true;
        }
        else{
            return false;
        }
        
     }

    function registro($conn,$name){

        //SQL Query
        $query = "INSERT INTO emper_users(`name`, `email`, `password`)
        VALUES('$name', '$this->email_user', '$this->pass_user')";
        //Query execution :0000
        $insert= $conn -> query($query) or die ("Error ".$conn->error);

        //Evaluation of query
        if($insert){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
