<?php

if(!isset($_POST['login-submit'])){
    header("Location:../login.php");
}

require "db.inc.php";

$username = $_POST['uname'];
$password = $_POST['psw'];
$query = mysqli_query($con, "SELECT*FROM utilizatori WHERE parola='".$password."' AND username='".$username."'");
$num_rows = mysqli_num_rows($query);

if($num_rows != 0){
    while($row = mysqli_fetch_assoc($query)){
        $databaseusername=$row['username'];
        $databasepassword=$row['parola'];
    }
    if($username == $databaseusername && $password == $databasepassword){
        session_start();
        $_SESSION['isLogged']="true";
        if($username=="admin" && $password=="admin"){
            $_SESSION['isAdmin']="true";
        }else{
            $_SESSION['isAdmin']="false";
        }     
        header("Location: ../index.php");
    }
}
    else{
        header("Location: ../login.php");
    }



//echo "Name= ".$username." and password= ".$password;
//bla bla bla

?>