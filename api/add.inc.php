<?php
if(!isset($_POST['adaugaSali']) and !isset($_POST['adaugaProfesor'])){
    header("location: ../index.php");
    exit();
}
if(isset($_POST['adaugaSali'])){
    //verificam daca toate campurile au fost completate  
    if(!(isset($_POST['days']) and isset($_POST['interval']) and !empty($_POST["sala"])) ){
        header("location: ../index.php");
        exit();
    }
    $nrSali=$_POST['sala'];
    if(isset($_POST['days'])){
        $count=1;
        foreach($_POST['days'] as $day){
            if($count==1){
                $days=$day;
                $count++;
            }
            else{
                $days=$days.",".$day;
            }
            
        }
    }

    if(isset($_POST['interval'])){
        $count=1;
        foreach($_POST['interval'] as $interval){
            if($count==1){
                $intervale=$interval;
                $count++;
            }
            else{
                $intervale=$intervale.",".$interval;
            }
            
        }
    }
    require "db.inc.php";
    $sql = "INSERT INTO sala(nr_sali, zi, interval_timp)
    VALUES ('$nrSali', '$days', '$intervale')";
    if ($con->query($sql) === TRUE) {
        header("location: ../index.php?succes");
    } else {
        header("location: ../index.php?failure");
    }
    $con->close();
    exit();

}


if(isset($_POST['adaugaProfesor'])){
    $numeProfesor=$username=$_POST['numeProfesor'];
    $prenumeProfesor=$password=$_POST['prenumeProfesor'];
    $materiePredata=$_POST['materiePredata'];
    $nrCursuri=$_POST['numarCursuri'];
    $nrSeminarii=$_POST['numarSeminarii'];
}




?>