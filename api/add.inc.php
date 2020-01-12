<?php
if(!isset($_POST['adaugaSali']) and !isset($_POST['adaugaProfesor'])){
    header("location: ../index.php");
}

if(isset($_POST['adaugaSali'])){



    if(isset($_POST['days'])){
        foreach($_POST['days'] as $day){
            echo $day;
        }
    }
}


if(isset($_POST['adaugaProfesor'])){
    $numeProfesor=$username=$_POST['numeProfesor'];
    $prenumeProfesor=$password=$_POST['prenumeProfesor'];
    $materiePredata=$_POST['materiePredata'];
    $nrCursuri=$_POST['numarCursuri'];
    $nrSeminarii=$_POST['numarSeminarii'];
}




?>