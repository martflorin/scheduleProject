<?php

if(!isset($_POST['login-submit'])){
    header("Location:../login.php");
}

require "db.inc.php";




$username=$_POST['uname'];
$password=$_POST['psw'];


if($username=="admin" && $password=="admin"){
    session_start();
    $_SESSION['isLogged']="true";
    $_SESSION['isAdmin']="true";
    header("Location: ../index.php");
}
else{
    session_start();
    $_SESSION['isLogged']="true";
    $_SESSION['isAdmin']="false";
    header("Location: ../index.php");
}
echo "Name= ".$username." and password= ".$password;
//bla bla bla

?>