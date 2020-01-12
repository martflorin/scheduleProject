<?php 
    session_start();
    if(!isset($_SESSION['isLogged'])){
        header("Location: login.php");
    }
?>

<?php require "header.php";
if($_SESSION['isAdmin']=="true"){
    require "admin.php";
}else{
    require "user.php";
}
?>

   