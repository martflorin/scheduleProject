<?php
session_start();
if(!isset($_POST['add-alegere'])){
    header("location:../index.php");
    exit();
}
require "db.inc.php";


if(empty($_POST['sali']) or empty($_POST['interval']) or empty($_POST['zi'])){
    header("location:../index.php");
    exit();
}

$id=$_SESSION['id_profesor'];
$sali=$_POST['sali'];
$zi=$_POST['zi'];
$interval=$_POST['interval'];
$comentariu=$_POST['comentariu'];
$sql1=mysqli_query($con, "SELECT*FROM alege WHERE sala='".$sali."' AND zi='".$zi."' AND interval_timp='".$interval."'");
$num_rows = mysqli_num_rows($sql1);
if($num_rows != 0){
    while($row = mysqli_fetch_assoc($sql1)){
        $databasesala=$row['sala'];
        $databasezi=$row['zi'];
        $databaseinterval=$row['interval_timp'];
    }
    if($sali == $databasesala && $zi == $databasezi && $interval == $databaseinterval){
        ?>
        <script>alert('Aceasta sala a mai fost aleasa!');</script>
        <?php
        header("Refresh:0; url=../index.php");
    }
    }else{
        ?>
        <script>alert('Aceasta sala n-a mai fost aleasa!');</script>
        <?php
        header("Refresh:0; url=../index.php");
    }

$id=$_SESSION['id_profesor'];
$sali=$_POST['sali'];
$zi=$_POST['zi'];
$interval=$_POST['interval'];
$comentariu=$_POST['comentariu'];
$sql = "INSERT INTO alege(id_profesor,sala,zi,interval_timp,comentariu)
VALUES ('$id', '$sali', '$zi','$interval','$comentariu')";
if ($con->query($sql) === TRUE) {
    $_SESSION['alegeri']++;
    $alege=$_SESSION['alegeri'];
    $id=$_SESSION['id_profesor'];
    $sql = "UPDATE utilizatori SET nr_alegeri='".$alege."' WHERE id='".$id."'";
    $con->query($sql);
        //header("location: ../index.php?succes");
} else {
        //header("location: ../index.php?failure");
}
$con->close();

?>