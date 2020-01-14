<?php

if(!isset($_POST['login-submit'])){
    header("Location:../login.php");
}

require "db.inc.php";
function getInformation(){
    require "db.inc.php";
    $query=mysqli_query($con, "SELECT*FROM sala");
    $num_rows=mysqli_num_rows($query);
    if($num_rows!=0){
        while($row=mysqli_fetch_assoc($query)){
            $_SESSION['nr_sali']=$row['nr_sali'];
            $_SESSION['zi']=explode(",",$row['zi']);
            $_SESSION['interval_timp']=explode(",",$row['interval_timp']);
        }
    }
}
$username = $_POST['uname'];
$password = $_POST['psw'];
$query = mysqli_query($con, "SELECT*FROM utilizatori WHERE parola='".$password."' AND username='".$username."'");
$num_rows = mysqli_num_rows($query);

if($num_rows != 0){
    while($row = mysqli_fetch_assoc($query)){
        $databaseid=$row['id'];
        $databaseusername=$row['username'];
        $databasepassword=$row['parola'];
        $databasenume=$row['nume'];
        $databaseprenume=$row['prenume'];
        $databasematerie=$row['materie_predata'];
        $databaseseminarii=$row['nr_seminarii'];
        $databasecursuri=$row['nr_cursuri'];
        $databaseidprofesor=$row['id'];
        $databasealegeri=$row['nr_alegeri'];
    }
    if($username == $databaseusername && $password == $databasepassword){
        session_start();
        $_SESSION['isLogged']="true";
        if($username=="admin" && $password=="admin"){
            $_SESSION['isAdmin']="true";
        }else{
            $_SESSION['isAdmin']="false";
            $_SESSION['Nume']=$databasenume;
            $_SESSION['Prenume']=$databaseprenume;
            $_SESSION['Materie predata']=$databasematerie;
            $_SESSION['Numar seminarii']=$databasecursuri;
            $_SESSION['Numar cursuri']=$databaseseminarii;
            $_SESSION['id_profesor']=$databaseidprofesor;
            $_SESSION['alegeri']=$databasealegeri;
            $_SESSION['id_profesor']=$databaseid;
            getInformation();
            
        }

        header("Location: ../index.php");
    }
}
    else{
        header("Location: ../login.php?failed");
    }



//echo "Name= ".$username." and password= ".$password;
//bla bla bla

?>