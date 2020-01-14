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
$sql = "INSERT INTO alege(id_profesor,sala,zi,interval_timp,comentariu)
VALUES ('$id', '$sali', '$zi','$interval','$comentariu')";
if ($con->query($sql) === TRUE) {
    $_SESSION['alegeri']++;
    $alege=$_SESSION['alegeri'];
    $id=$_SESSION['id_profesor'];
    $sql = "UPDATE utilizatori SET nr_alegeri='".$alege."' WHERE id='".$id."'";
    $con->query($sql);
    header("location: ../index.php?succes");
} else {
    header("location: ../index.php?failure");
}
$con->close();

?>