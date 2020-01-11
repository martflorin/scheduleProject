<?php

if(!isset($_POST['login-submit'])){
    header("Location:../login.php");
}

$username=$_POST['uname'];
$password=$_POST['psw'];
echo "Name= ".$username." and password= ".$password;
//bla bla bla

?>